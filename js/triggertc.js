$(document).ready(function() {
  function dotdotdot(cursor, times, string) {
        return Array(times - Math.abs(cursor % (times * 2) - times) + 2).join(string);
      }

      var cursor = 0;
      setInterval(function () {
        $("#loading").text("Build in progress "+dotdotdot(cursor++, 3, '..'));
      }, 100);

  $("#grademe").click(function (e) {
    e.preventDefault();
    var gitrepoPath = $("#gitpath").val();
    var tctorun = $("#main-exercise").data("exerciseid");

    console.log(tctorun);
    jQuery.ajax({
        type: "POST",
        //url: "http://robot:bd6259f0769976dc672fe22d30cb174d@kat.inf.elte.hu/jenkins/job/robot-demo/build?token=m2L5t8jlA0r880pjzQIrxGn9L6pzg410",
        url: "http://robot:0a7a2501313f594fbb7160d22b924566@kat.inf.elte.hu/jenkins/job/robot-demo/buildWithParameters?token=m2L5t8jlA0r880pjzQIrxGn9L6pzg410&gitrepo="+gitrepoPath+"&testcase="+tctorun,
        dataType:"html",
        success:function(response){
            //build has started successfully
    getLastBuild();
        },
        error:function (xhr, ajaxOptions, thrownError){
            alert(thrownError);
        }
    });
  });

  function getConsoleText () {
    jQuery.ajax({
        type: "POST",
        url: "http://robot:0a7a2501313f594fbb7160d22b924566@kat.inf.elte.hu/jenkins/job/robot-demo/lastBuild/consoleText",
        dataType:"html",
        success:function(response){
            $("#loading").toggleClass("hidden");
            //$("#buildconsoletext").append(response);
            //console.log(response);
            var regex = /(\*{3})(.*)(\*{3})/;
            var matches = regex.exec(response);
            var jsonResult = matches[2];
            var jsonObject = jQuery.parseJSON(jsonResult);
            var error = false;
            //console.log(jsonObject);
            $.each(jsonObject, function(i, obj) {
              if (obj != "PASS") { error = true }
              $("#buildinprogress").append("<p class='result-row'>"+i+": "+obj+"</p>");
            });
            //console.log(error);
            if (error === false) {
              $("#buildinprogress").removeClass("alert-warning").addClass("alert-success");
            }

            var pointsgained = jsonObject.points;
            var exercise = jsonObject.exercise;
            jQuery.ajax({
                type: "POST",
                url: "../../php/exercisetodb.php",
                dataType:"json",
                data: {'pointsgained': pointsgained, 'exercise': exercise},
                success:function(response){
                  //alert("success")
                  //console.log(response);
                  $("#graderesult").css("width", response+"%");
                },
                error:function (xhr, ajaxOptions, thrownError){
                    alert(thrownError);
                }
            });

        },
        error:function (xhr, ajaxOptions, thrownError){
            alert(thrownError);
        }
    });

  }

  // getting back the last result
  $(".getlastbuild").click(function (e) {
    getConsoleText();
  });


  function getLastBuild () {
    jQuery.ajax({
        type: "POST",
        url: "http://robot:0a7a2501313f594fbb7160d22b924566@kat.inf.elte.hu/jenkins/job/robot-demo/lastBuild/api/json?depth=1",
        dataType:"json",
        success:function(response){
            if (response.building) {
      $("#buildinprogress").removeClass("hidden");
      setTimeout(getLastBuild, 5000);
    } else {
      getConsoleText();
    }
        },
        error:function (xhr, ajaxOptions, thrownError){
            alert(thrownError);
        }
    });
  }

});

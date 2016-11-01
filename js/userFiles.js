// ANIMAL TEMPLATE
 
// sets variable source to the animalTemplate id in index.html
var source = document.getElementById("userFilesTemplate").innerHTML;
 
// Handlebars compiles the above source into a template
var template = Handlebars.compile(source);

var this_js_script = $('script[src*=userFiles]');
var id = this_js_script.attr('data-userid');
var targetdivs = this_js_script.attr('data-type');
var ids = id.split(",");
var divs = targetdivs.split(",");



$(document).ready(function(){
        
        var i = 2;
        cb(i);
        function cb(i){
          
        //This is ajax call    
        $.ajax({
        type: "POST",
        url: "php/getdirectory.php",
        dataType: "json",
        data: { folderurl : ids[i] },
      success: function(data){
          var newdata = new Object();
          newdata.files = [];
          newdata.containfiles = true;
          $.each(data, function(i,filename) { 
            var file = new Object();
            file.url = ids[i]+filename;
            file.name = filename.split(".")[0];
            file.mitomodel = ids[i]+file.name;
            newdata.files.push(file);

        });
          
          
          // data is passed to above template
          var output = template(newdata);
          
          // HTML element with id "animalList" is set to the output above
          document.getElementById(divs[i]).innerHTML = output;
          
          
            $(".database").click(function(){
                var $checkbox = $(this).find(".comparecheckbox");
                console.log($checkbox);
                $checkbox.prop('checked', !$checkbox.prop('checked'));
                var $glyok = $(this).find(".glyphicon-ok");
                if($checkbox.prop('checked')){
                    $(this).css('background-color','#a3f379');
                    $glyok.css('display','block');
                }
                else{
                    $(this).css('background-color', 'white');
                    $glyok.css('display','none');
                }
                if ($('input[type=checkbox]:checked').length > 6) {
                    $checkbox.prop('checked', false);
                    $(this).css('background-color', 'white');
                    $glyok.css('display','none');
                    $( "#warning1" ).fadeIn( 300 ).delay( 400 ).fadeOut( 300 );
                }
            });
          
            if (i>0) cb(i-1);
    
          
      },
        error:function(e){
            var newdata = new Object();
            newdata.containfiles = false;
            var output = template(newdata);
            
          
          // HTML element with id "animalList" is set to the output above
          document.getElementById(divs[i]).innerHTML = output;
            console.log(e);
            
        }
    });
        //end of ajax call
            
        }


    $("form").submit(function (e) {
        if ($('input[type=checkbox]:checked').length == 0){
            e.preventDefault();
            $( "#warning2" ).fadeIn( 300 ).delay( 400 ).fadeOut( 300 );
        }
        if ($('input[type=checkbox]:checked').length > 6){
            e.preventDefault();
            $( "#warning1" ).fadeIn( 300 ).delay( 400 ).fadeOut( 300 );
        } 
    });
    
    $(".dismiss").click(function(e){
        $('input:checkbox').removeAttr('checked');
        $(".database").css('background-color', 'white');
    })
});
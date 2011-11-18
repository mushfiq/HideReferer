$(document).ready( function(e){
    $("#linkSubmit").click( function(e){
        var orginalUrl = $("#HideForm_url").val();
        var baseUrl = "http://hiderefer.net";
        var directUrl = baseUrl+'?'+orginalUrl;
        //var aTagStart = '<a href=';

        var htmlUrl = "<a href="+'"'+baseUrl+'?'+orginalUrl+'"'+">"+'Hiderefer.net URL'+"</a>";
        var bbUrl = '[url='+baseUrl+'?'+orginalUrl+']'+'Hiderefer.net URL'+'[/url]';
        //alert(htmlUrl);
        console.log(typeof(htmlUrl));
        //alert(directUrl);
        $("#HideForm_urlDirect").append(directUrl);
        $("#HideForm_urlHtml").val(htmlUrl);
        $("#HideForm_urlBbcode").append(bbUrl);
        $.ajax({
            type:"POST",
            data:orginalUrl,
            url: "/hide/search",
            success: function(response){
                $(this).addClass("done");
            }
           
        });
    //        if($("#sucess")){
    //           // alert()
    //            $("#content").appendTo("<h1>asdasd</h1>");
    //        }
    //        else{
    //            
    //        }
       
       

    });
    //alert($("#url").text());
    
    var currentUrl = document.URL;
   
    
    if(currentUrl.search("id=*")>0){
        setTimeout(function() {
            console.log("refresheing!");
        // window.location.href = $("#url").text();
        }, 4000);
    //    $(location).attr('href',currentUrl);
    //    window.location.href = currentUrl;
       
    }
//alert(currentUrl);
});
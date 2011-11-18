$(document).ready( function(e){
   
    $("#linkSubmit").click( function(e){
        e.preventDefault();
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

    });
    
    
    var currentUrl = document.URL;
    if(currentUrl.search(/id=/)>0){
        var redirectUrl = $("#url").text();
        setTimeout(function(){ 
            window.location = redirectUrl;
        }, 3000 ); 
    
}
});
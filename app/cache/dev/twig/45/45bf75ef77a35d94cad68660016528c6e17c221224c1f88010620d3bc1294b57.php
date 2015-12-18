<?php

/* multimediaBundle:Default:AJAXSearch.html.twig */
class __TwigTemplate_bef83af230092acf8dcf83487977cc4a3846f58cf49e848007dfcf6f190c82b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "multimediaBundle:Default:AJAXSearch.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48c5c13d81bf2da3659f28230aacd18e0f1605c3cf3f20397365d98b9cca835e = $this->env->getExtension("native_profiler");
        $__internal_48c5c13d81bf2da3659f28230aacd18e0f1605c3cf3f20397365d98b9cca835e->enter($__internal_48c5c13d81bf2da3659f28230aacd18e0f1605c3cf3f20397365d98b9cca835e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "multimediaBundle:Default:AJAXSearch.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48c5c13d81bf2da3659f28230aacd18e0f1605c3cf3f20397365d98b9cca835e->leave($__internal_48c5c13d81bf2da3659f28230aacd18e0f1605c3cf3f20397365d98b9cca835e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f296a999cea3260516ee5ef054f1a03da6bd18a4735333248aa3d45a6c8433c = $this->env->getExtension("native_profiler");
        $__internal_8f296a999cea3260516ee5ef054f1a03da6bd18a4735333248aa3d45a6c8433c->enter($__internal_8f296a999cea3260516ee5ef054f1a03da6bd18a4735333248aa3d45a6c8433c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_8f296a999cea3260516ee5ef054f1a03da6bd18a4735333248aa3d45a6c8433c->leave($__internal_8f296a999cea3260516ee5ef054f1a03da6bd18a4735333248aa3d45a6c8433c_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_e8d54d8318769aba0d15a5c064dd71486fb86d5a01d07d38ca937bb82565da81 = $this->env->getExtension("native_profiler");
        $__internal_e8d54d8318769aba0d15a5c064dd71486fb86d5a01d07d38ca937bb82565da81->enter($__internal_e8d54d8318769aba0d15a5c064dd71486fb86d5a01d07d38ca937bb82565da81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "<center>
  <h1>Public gallery & photo search:</h1>
  <center>
    Search by galleries name:<input id=\"searchFieldGallery\" type=\"text\" onInput=\"searchGallery()\"><br><br>
    Search photos by tag:<input id=\"searchFieldPhoto\" type=\"text\" onInput=\"searchPhoto()\">
    <hr>
    <div id=\"searchContent\">

    </div>
  </center>

";
        
        $__internal_e8d54d8318769aba0d15a5c064dd71486fb86d5a01d07d38ca937bb82565da81->leave($__internal_e8d54d8318769aba0d15a5c064dd71486fb86d5a01d07d38ca937bb82565da81_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_31685502a14c8d2d34ba7a246ec1cc4e0f22f8b28a5de1cb18f057f65919ed24 = $this->env->getExtension("native_profiler");
        $__internal_31685502a14c8d2d34ba7a246ec1cc4e0f22f8b28a5de1cb18f057f65919ed24->enter($__internal_31685502a14c8d2d34ba7a246ec1cc4e0f22f8b28a5de1cb18f057f65919ed24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 23
        echo "<script>\$('#searchlink').addClass('selected');
var source=  \"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(""), "html", null, true);
        echo "\";
source = source.substring(0,source.length - 1);
source = source+\"/\";
var href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("multimedia_view_gallery", array("galleryID" => "0"));
        echo "\";
href = href.substring(0,href.length - 1);
var hrefphoto=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("multimedia_view_image", array("imageID" => "0"));
        echo "\";
hrefphoto = hrefphoto.substring(0,hrefphoto.length - 1);

function searchGallery(){
  \$('#searchFieldPhoto').val('');
  var dataToSend = \$('#searchFieldGallery').val();
  \$.ajax({
    url: '";
        // line 36
        echo $this->env->getExtension('routing')->getPath("multimedia_ajax_search_gallery");
        echo "',
    type: \"POST\",
    data: {data:dataToSend },
    dataType: \"json\",
    beforeSend:function(){\$('#searchContent').html('');\$('#searchContent').html('<div><img id=\"loading-wheel\" src=\"'+source+'images/loading-wheel.gif\"/></div>')},
    success:function(response){
      \$('#searchContent').html('');
      var JSONresponse = jQuery.parseJSON(response);
      if(JSONresponse != ''){
      \$.each(JSONresponse, function(i, item) {
        \$('#searchContent').append(\"<div class='menu_item'><a href='\"+href+JSONresponse[i].id+\"'><img class='galleryLogo' src='\"+source+JSONresponse[i].path+\"' alt='gallery image' width='142' height='50' /></a> <h3 class='toUpper'>\"+JSONresponse[i].name+\"</h3> Owner:\"+JSONresponse[i].owner.email+\"</span></div>\");
      });}
      else{
        \$('#searchContent').html(\"Sorry, we couldnt find anything with those parameters\");
      }
    },
    error:function(){\$('#searchContent').html('<p class=\"error\"><strong>El servidor parece que no responde</p>')}
  });
}

function searchPhoto(){
  \$('#searchFieldGallery').val('');
  var dataToSend = \$('#searchFieldPhoto').val();
  \$.ajax({
    url: '";
        // line 60
        echo $this->env->getExtension('routing')->getPath("multimedia_ajax_search_photo");
        echo "',
    type: \"POST\",
    data: {data:dataToSend },
    dataType: \"json\",
    beforeSend:function(){\$('#searchContent').html('');\$('#searchContent').html('<div><img id=\"loading-wheel\" src=\"'+source+'images/loading-wheel.gif\"/></div>')},
    success:function(response){
      \$('#searchContent').html('');
      var JSONresponse = jQuery.parseJSON(response);
      if(JSONresponse != ''){
      \$.each(JSONresponse, function(i, item) {
        \$('#searchContent').append(\"<div class='menu_item'><a href='\"+hrefphoto+JSONresponse[i].id+\"'><img class='galleryLogo' src='\"+source+JSONresponse[i].path+\"' alt='gallery image' width='142' height='50' /></a> <h3 class='toUpper'>\"+JSONresponse[i].name+\"</h3> </span></div>\");
      });}
      else{
        \$('#searchContent').html(\"Sorry, we couldnt find anything with those parameters\");
      }

    },
    error:function(){\$('#searchContent').html('<p class=\"error\"><strong>El servidor parece que no responde</p>')}
  });

}



</script>

";
        
        $__internal_31685502a14c8d2d34ba7a246ec1cc4e0f22f8b28a5de1cb18f057f65919ed24->leave($__internal_31685502a14c8d2d34ba7a246ec1cc4e0f22f8b28a5de1cb18f057f65919ed24_prof);

    }

    public function getTemplateName()
    {
        return "multimediaBundle:Default:AJAXSearch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 60,  102 => 36,  92 => 29,  87 => 27,  81 => 24,  78 => 23,  72 => 22,  54 => 7,  42 => 6,  36 => 5,  11 => 2,);
    }
}
/* */
/* {% extends '::base.html.twig' %}*/
/* */
/* */
/* {% block body %}*/
/* {% block content %}*/
/* <center>*/
/*   <h1>Public gallery & photo search:</h1>*/
/*   <center>*/
/*     Search by galleries name:<input id="searchFieldGallery" type="text" onInput="searchGallery()"><br><br>*/
/*     Search photos by tag:<input id="searchFieldPhoto" type="text" onInput="searchPhoto()">*/
/*     <hr>*/
/*     <div id="searchContent">*/
/* */
/*     </div>*/
/*   </center>*/
/* */
/* {% endblock content %}*/
/* {% endblock %}*/
/* */
/* */
/* {% block javascripts %}*/
/* <script>$('#searchlink').addClass('selected');*/
/* var source=  "{{asset("")}}";*/
/* source = source.substring(0,source.length - 1);*/
/* source = source+"/";*/
/* var href="{{path('multimedia_view_gallery',{'galleryID':'0'})}}";*/
/* href = href.substring(0,href.length - 1);*/
/* var hrefphoto="{{path('multimedia_view_image',{'imageID':'0'})}}";*/
/* hrefphoto = hrefphoto.substring(0,hrefphoto.length - 1);*/
/* */
/* function searchGallery(){*/
/*   $('#searchFieldPhoto').val('');*/
/*   var dataToSend = $('#searchFieldGallery').val();*/
/*   $.ajax({*/
/*     url: '{{path('multimedia_ajax_search_gallery')}}',*/
/*     type: "POST",*/
/*     data: {data:dataToSend },*/
/*     dataType: "json",*/
/*     beforeSend:function(){$('#searchContent').html('');$('#searchContent').html('<div><img id="loading-wheel" src="'+source+'images/loading-wheel.gif"/></div>')},*/
/*     success:function(response){*/
/*       $('#searchContent').html('');*/
/*       var JSONresponse = jQuery.parseJSON(response);*/
/*       if(JSONresponse != ''){*/
/*       $.each(JSONresponse, function(i, item) {*/
/*         $('#searchContent').append("<div class='menu_item'><a href='"+href+JSONresponse[i].id+"'><img class='galleryLogo' src='"+source+JSONresponse[i].path+"' alt='gallery image' width='142' height='50' /></a> <h3 class='toUpper'>"+JSONresponse[i].name+"</h3> Owner:"+JSONresponse[i].owner.email+"</span></div>");*/
/*       });}*/
/*       else{*/
/*         $('#searchContent').html("Sorry, we couldnt find anything with those parameters");*/
/*       }*/
/*     },*/
/*     error:function(){$('#searchContent').html('<p class="error"><strong>El servidor parece que no responde</p>')}*/
/*   });*/
/* }*/
/* */
/* function searchPhoto(){*/
/*   $('#searchFieldGallery').val('');*/
/*   var dataToSend = $('#searchFieldPhoto').val();*/
/*   $.ajax({*/
/*     url: '{{path('multimedia_ajax_search_photo')}}',*/
/*     type: "POST",*/
/*     data: {data:dataToSend },*/
/*     dataType: "json",*/
/*     beforeSend:function(){$('#searchContent').html('');$('#searchContent').html('<div><img id="loading-wheel" src="'+source+'images/loading-wheel.gif"/></div>')},*/
/*     success:function(response){*/
/*       $('#searchContent').html('');*/
/*       var JSONresponse = jQuery.parseJSON(response);*/
/*       if(JSONresponse != ''){*/
/*       $.each(JSONresponse, function(i, item) {*/
/*         $('#searchContent').append("<div class='menu_item'><a href='"+hrefphoto+JSONresponse[i].id+"'><img class='galleryLogo' src='"+source+JSONresponse[i].path+"' alt='gallery image' width='142' height='50' /></a> <h3 class='toUpper'>"+JSONresponse[i].name+"</h3> </span></div>");*/
/*       });}*/
/*       else{*/
/*         $('#searchContent').html("Sorry, we couldnt find anything with those parameters");*/
/*       }*/
/* */
/*     },*/
/*     error:function(){$('#searchContent').html('<p class="error"><strong>El servidor parece que no responde</p>')}*/
/*   });*/
/* */
/* }*/
/* */
/* */
/* */
/* </script>*/
/* */
/* {% endblock %}*/
/* */

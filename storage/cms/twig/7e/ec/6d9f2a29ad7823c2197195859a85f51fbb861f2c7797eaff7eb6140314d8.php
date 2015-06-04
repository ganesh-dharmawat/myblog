<?php

/* /var/www/html/myblog/themes/fabriciorabelo-squad/partials/footer.htm */
class __TwigTemplate_7eec6d9f2a29ad7823c2197195859a85f51fbb861f2c7797eaff7eb6140314d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<footer>
 <div class=\"container\">
     <div class=\"row\">
         <div class=\"col-md-12 col-lg-12\">
             <div class=\"wow shake\" data-wow-delay=\"0.4s\">
             <div class=\"page-scroll marginbot-30\">
                 <a href=\"#intro\" id=\"totop\" class=\"btn btn-circle\">
                     <i class=\"fa fa-angle-double-up animated\"></i>
                 </a>
             </div>
             </div>
             <p>&copy;Copyright ";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["now"]) ? $context["now"] : null), "Y"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "site_name", array()), "html", null, true);
        echo ".</p>
         </div>
     </div>
 </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/myblog/themes/fabriciorabelo-squad/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 12,  19 => 1,);
    }
}

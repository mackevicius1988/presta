<?php

/* PrestaShopBundle:Admin:Translations/include/translations-form-start.html.twig */
class __TwigTemplate_860eb093b4d46029a5b2cbdf466017a16fd91b6cb064a18e4b4aaa4911a386a5 extends Twig_Template
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
        // line 25
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "
<div";
        // line 26
        echo (isset($context["parent"]) ? $context["parent"] : null);
        echo ">
  <div class=\"translation-forms col-offset\"";
        // line 27
        echo (isset($context["id"]) ? $context["id"] : null);
        // line 28
        echo (isset($context["domain"]) ? $context["domain"] : null);
        // line 29
        echo (isset($context["missing_translations"]) ? $context["missing_translations"] : null);
        echo ">
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin:Translations/include/translations-form-start.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 29,  29 => 28,  27 => 27,  23 => 26,  19 => 25,);
    }

    public function getSource()
    {
        return "";
    }
}

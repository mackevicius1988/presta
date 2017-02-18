<?php

/* PrestaShopBundle:Admin:Translations/include/translations-form-end.html.twig */
class __TwigTemplate_9c3f4928d4482ab2201f08f8cee04f913bced402bc37f736266831c02d9d7c1b extends Twig_Template
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
        echo (isset($context["form_start"]) ? $context["form_start"] : null);
        echo "
";
        // line 26
        echo (isset($context["subtree"]) ? $context["subtree"] : null);
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin:Translations/include/translations-form-end.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 26,  19 => 25,);
    }

    public function getSource()
    {
        return "";
    }
}

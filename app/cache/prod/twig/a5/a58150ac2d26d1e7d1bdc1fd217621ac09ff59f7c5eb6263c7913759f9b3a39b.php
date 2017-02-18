<?php

/* PrestaShopBundle:Admin/Translations/include:translations-forms.html.twig */
class __TwigTemplate_bc73238fd29861b6a99bf8772c4d81f3d5aaab78f61b1de240ffa653be6a46ea extends Twig_Template
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
        echo "<div id=\"jetsContent\">
  ";
        // line 26
        echo $this->env->getExtension('PrestaShopBundle\Twig\TranslationsExtension')->getTranslationsForms((isset($context["translationsTree"]) ? $context["translationsTree"] : null), (isset($context["theme"]) ? $context["theme"] : null));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Translations/include:translations-forms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 26,  19 => 25,);
    }

    public function getSource()
    {
        return "";
    }
}

<?php

/* SEPBundle:Default:index.html.twig */
class __TwigTemplate_ef2dfff390bb625148d9f5f219d2e211811f2861c2824aa5d5dbb5288d6b7a79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "SEPBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'authenticatedUsername' => array($this, 'block_authenticatedUsername'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_815fe8890e00ad7c8c1f3866cc18ceedd3f89aabafe83b5fc83d782c4e049410 = $this->env->getExtension("native_profiler");
        $__internal_815fe8890e00ad7c8c1f3866cc18ceedd3f89aabafe83b5fc83d782c4e049410->enter($__internal_815fe8890e00ad7c8c1f3866cc18ceedd3f89aabafe83b5fc83d782c4e049410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SEPBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_815fe8890e00ad7c8c1f3866cc18ceedd3f89aabafe83b5fc83d782c4e049410->leave($__internal_815fe8890e00ad7c8c1f3866cc18ceedd3f89aabafe83b5fc83d782c4e049410_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_9df733ccae599ab2e53b01ccb66a13fc5f769892b6a6fba4b8875dcfe1c384e2 = $this->env->getExtension("native_profiler");
        $__internal_9df733ccae599ab2e53b01ccb66a13fc5f769892b6a6fba4b8875dcfe1c384e2->enter($__internal_9df733ccae599ab2e53b01ccb66a13fc5f769892b6a6fba4b8875dcfe1c384e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@SEP/Default/userid.html.twig");
        
        $__internal_9df733ccae599ab2e53b01ccb66a13fc5f769892b6a6fba4b8875dcfe1c384e2->leave($__internal_9df733ccae599ab2e53b01ccb66a13fc5f769892b6a6fba4b8875dcfe1c384e2_prof);

    }

    public function getTemplateName()
    {
        return "SEPBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block authenticatedUsername %}{{ include('@SEP/Default/userid.html.twig') }}{% endblock authenticatedUsername %}*/
/* */
/* */

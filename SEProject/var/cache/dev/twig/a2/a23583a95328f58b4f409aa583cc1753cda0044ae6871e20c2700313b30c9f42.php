<?php

/* @SEP/Default/userid.html.twig */
class __TwigTemplate_c803e3dead3e3b7cf2808d1dab94c32c5ba9aad46ee247b1edce7e876cf6fe7a extends Twig_Template
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
        $__internal_cd796fcb2f94c81f08e43f0fbab2b310599585674ff477824d316bd91c7be2c0 = $this->env->getExtension("native_profiler");
        $__internal_cd796fcb2f94c81f08e43f0fbab2b310599585674ff477824d316bd91c7be2c0->enter($__internal_cd796fcb2f94c81f08e43f0fbab2b310599585674ff477824d316bd91c7be2c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SEP/Default/userid.html.twig"));

        // line 1
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SEPBundle:Default:username"));
        
        $__internal_cd796fcb2f94c81f08e43f0fbab2b310599585674ff477824d316bd91c7be2c0->leave($__internal_cd796fcb2f94c81f08e43f0fbab2b310599585674ff477824d316bd91c7be2c0_prof);

    }

    public function getTemplateName()
    {
        return "@SEP/Default/userid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ render(controller('SEPBundle:Default:username')) }}*/

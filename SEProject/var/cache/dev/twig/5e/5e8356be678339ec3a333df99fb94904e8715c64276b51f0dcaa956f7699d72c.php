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
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f23d0f8c8697016e4eb1aadf3860dca61d7aedc6d1492ef0131db81a90ce3190 = $this->env->getExtension("native_profiler");
        $__internal_f23d0f8c8697016e4eb1aadf3860dca61d7aedc6d1492ef0131db81a90ce3190->enter($__internal_f23d0f8c8697016e4eb1aadf3860dca61d7aedc6d1492ef0131db81a90ce3190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SEPBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f23d0f8c8697016e4eb1aadf3860dca61d7aedc6d1492ef0131db81a90ce3190->leave($__internal_f23d0f8c8697016e4eb1aadf3860dca61d7aedc6d1492ef0131db81a90ce3190_prof);

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
        return array (  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */

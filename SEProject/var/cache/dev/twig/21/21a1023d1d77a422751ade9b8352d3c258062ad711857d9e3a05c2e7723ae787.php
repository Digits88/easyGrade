<?php

/* user/new.html.twig */
class __TwigTemplate_699e86728f81f6b82c2821cb6fd192f2f01f4a1debe7b1b341a007807c8d45c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/new.html.twig", 1);
        $this->blocks = array(
            'contentdetail' => array($this, 'block_contentdetail'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5fc83e9d8c9ac508d87c44cf0520213fd5738871bbc99a2dd46660f14be62450 = $this->env->getExtension("native_profiler");
        $__internal_5fc83e9d8c9ac508d87c44cf0520213fd5738871bbc99a2dd46660f14be62450->enter($__internal_5fc83e9d8c9ac508d87c44cf0520213fd5738871bbc99a2dd46660f14be62450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fc83e9d8c9ac508d87c44cf0520213fd5738871bbc99a2dd46660f14be62450->leave($__internal_5fc83e9d8c9ac508d87c44cf0520213fd5738871bbc99a2dd46660f14be62450_prof);

    }

    // line 3
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_dd1ac9eb53b53a7032a60553f9650b0bd6cb7975134bbb715b173a355838b606 = $this->env->getExtension("native_profiler");
        $__internal_dd1ac9eb53b53a7032a60553f9650b0bd6cb7975134bbb715b173a355838b606->enter($__internal_dd1ac9eb53b53a7032a60553f9650b0bd6cb7975134bbb715b173a355838b606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 4
        echo "    <h1>User creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_dd1ac9eb53b53a7032a60553f9650b0bd6cb7975134bbb715b173a355838b606->leave($__internal_dd1ac9eb53b53a7032a60553f9650b0bd6cb7975134bbb715b173a355838b606_prof);

    }

    public function getTemplateName()
    {
        return "user/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 12,  52 => 8,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block contentdetail %}*/
/*     <h1>User creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('user_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
/* */

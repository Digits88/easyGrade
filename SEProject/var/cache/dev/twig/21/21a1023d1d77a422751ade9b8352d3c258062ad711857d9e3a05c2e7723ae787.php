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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e466b68dd5c5c0bc74573a59da99b34c0e7c30f023db09f3c7aefebf6e3f7e8 = $this->env->getExtension("native_profiler");
        $__internal_6e466b68dd5c5c0bc74573a59da99b34c0e7c30f023db09f3c7aefebf6e3f7e8->enter($__internal_6e466b68dd5c5c0bc74573a59da99b34c0e7c30f023db09f3c7aefebf6e3f7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e466b68dd5c5c0bc74573a59da99b34c0e7c30f023db09f3c7aefebf6e3f7e8->leave($__internal_6e466b68dd5c5c0bc74573a59da99b34c0e7c30f023db09f3c7aefebf6e3f7e8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9788fb7397a3abe9d3b9353da4809eacf54dc7df9fdc8361fa3e7150499c4460 = $this->env->getExtension("native_profiler");
        $__internal_9788fb7397a3abe9d3b9353da4809eacf54dc7df9fdc8361fa3e7150499c4460->enter($__internal_9788fb7397a3abe9d3b9353da4809eacf54dc7df9fdc8361fa3e7150499c4460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_9788fb7397a3abe9d3b9353da4809eacf54dc7df9fdc8361fa3e7150499c4460->leave($__internal_9788fb7397a3abe9d3b9353da4809eacf54dc7df9fdc8361fa3e7150499c4460_prof);

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
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>User creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('user_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

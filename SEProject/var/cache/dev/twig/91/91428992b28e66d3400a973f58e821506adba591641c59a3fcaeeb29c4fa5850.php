<?php

/* course/new.html.twig */
class __TwigTemplate_2a522c0e0ec50511af0e142c231dcd4ce7c84686594f9520c7f455a73a53c2db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "course/new.html.twig", 1);
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
        $__internal_17e01259e3546f4d325dab748bee85ff0ad6c04d16d81cf917ba70b9d71cd7e4 = $this->env->getExtension("native_profiler");
        $__internal_17e01259e3546f4d325dab748bee85ff0ad6c04d16d81cf917ba70b9d71cd7e4->enter($__internal_17e01259e3546f4d325dab748bee85ff0ad6c04d16d81cf917ba70b9d71cd7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17e01259e3546f4d325dab748bee85ff0ad6c04d16d81cf917ba70b9d71cd7e4->leave($__internal_17e01259e3546f4d325dab748bee85ff0ad6c04d16d81cf917ba70b9d71cd7e4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a129ff3c3c1bd5ccc60b1d4980203775e3bcdb32f761ecc3be79576cfde6203f = $this->env->getExtension("native_profiler");
        $__internal_a129ff3c3c1bd5ccc60b1d4980203775e3bcdb32f761ecc3be79576cfde6203f->enter($__internal_a129ff3c3c1bd5ccc60b1d4980203775e3bcdb32f761ecc3be79576cfde6203f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Course creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("course_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_a129ff3c3c1bd5ccc60b1d4980203775e3bcdb32f761ecc3be79576cfde6203f->leave($__internal_a129ff3c3c1bd5ccc60b1d4980203775e3bcdb32f761ecc3be79576cfde6203f_prof);

    }

    public function getTemplateName()
    {
        return "course/new.html.twig";
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
/*     <h1>Course creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('course_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

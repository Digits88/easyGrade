<?php

/* course/index.html.twig */
class __TwigTemplate_b4d3a1d65538c2469ede46b5eeb2193fa939ace2268c521b953a08f1bc01907b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "course/index.html.twig", 1);
        $this->blocks = array(
            'courselist' => array($this, 'block_courselist'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c73be88f1cfbb20322ce52b683caa6310028eddbe554edba7a6453aae459cfe9 = $this->env->getExtension("native_profiler");
        $__internal_c73be88f1cfbb20322ce52b683caa6310028eddbe554edba7a6453aae459cfe9->enter($__internal_c73be88f1cfbb20322ce52b683caa6310028eddbe554edba7a6453aae459cfe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c73be88f1cfbb20322ce52b683caa6310028eddbe554edba7a6453aae459cfe9->leave($__internal_c73be88f1cfbb20322ce52b683caa6310028eddbe554edba7a6453aae459cfe9_prof);

    }

    // line 3
    public function block_courselist($context, array $blocks = array())
    {
        $__internal_f251683b704cc4d8cc0b92d9673526addad3a1f1f1df6333e83fbd4ced045e12 = $this->env->getExtension("native_profiler");
        $__internal_f251683b704cc4d8cc0b92d9673526addad3a1f1f1df6333e83fbd4ced045e12->enter($__internal_f251683b704cc4d8cc0b92d9673526addad3a1f1f1df6333e83fbd4ced045e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "courselist"));

        // line 4
        echo "
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 6
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "coursename", array()), "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
        <li>
            <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("course_new");
        echo "\">Create a new Module</a>
        </li>

";
        
        $__internal_f251683b704cc4d8cc0b92d9673526addad3a1f1f1df6333e83fbd4ced045e12->leave($__internal_f251683b704cc4d8cc0b92d9673526addad3a1f1f1df6333e83fbd4ced045e12_prof);

    }

    public function getTemplateName()
    {
        return "course/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 10,  58 => 8,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block courselist %}*/
/* */
/*         {% for course in courses %}*/
/*             <li><a href="{{ path('course_show', { 'id': course.id }) }}">{{ course.coursename }}</a></li>*/
/*         {% endfor %}*/
/* */
/*         <li>*/
/*             <a href="{{ path('course_new') }}">Create a new Module</a>*/
/*         </li>*/
/* */
/* {% endblock %}*/
/* */

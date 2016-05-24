<?php

/* course/show.html.twig */
class __TwigTemplate_2a5c3748589ae2e1b462b790354a9d2b924b25695dd5464bf969c6ec7ec86711 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "course/show.html.twig", 1);
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
        $__internal_d34fb171d235f06de68264d6df6ac6c6132f7aff62e34d08b882d6985a0d00a8 = $this->env->getExtension("native_profiler");
        $__internal_d34fb171d235f06de68264d6df6ac6c6132f7aff62e34d08b882d6985a0d00a8->enter($__internal_d34fb171d235f06de68264d6df6ac6c6132f7aff62e34d08b882d6985a0d00a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d34fb171d235f06de68264d6df6ac6c6132f7aff62e34d08b882d6985a0d00a8->leave($__internal_d34fb171d235f06de68264d6df6ac6c6132f7aff62e34d08b882d6985a0d00a8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7510c9e45ed610374d1a0c37d13b1689a4dcc04e1bebe46e741b55fe3274bbff = $this->env->getExtension("native_profiler");
        $__internal_7510c9e45ed610374d1a0c37d13b1689a4dcc04e1bebe46e741b55fe3274bbff->enter($__internal_7510c9e45ed610374d1a0c37d13b1689a4dcc04e1bebe46e741b55fe3274bbff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Course</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("course_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_edit", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
            <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_edit", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "courseid", array()), "html", null, true);
        echo "</a>
        </li>
        <li>
            ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_7510c9e45ed610374d1a0c37d13b1689a4dcc04e1bebe46e741b55fe3274bbff->leave($__internal_7510c9e45ed610374d1a0c37d13b1689a4dcc04e1bebe46e741b55fe3274bbff_prof);

    }

    public function getTemplateName()
    {
        return "course/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 26,  76 => 24,  68 => 21,  64 => 20,  58 => 17,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Course</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ course.id }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('course_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('course_edit', { 'id': course.id }) }}">Edit</a>*/
/*             <a href="{{ path('course_edit', { 'id': course.id }) }}">{{ course.courseid }}</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

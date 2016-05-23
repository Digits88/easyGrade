<?php

/* user/edit.html.twig */
class __TwigTemplate_67c6eff0fc4c9bfbd38b5ae16dc50a3f55b48af8c25308347b7553d46773bd58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/edit.html.twig", 1);
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
        $__internal_03f827ee7bfa6184354c8cffb512c72a8b03e082524d4cbdf7e2f411f0c6c4e7 = $this->env->getExtension("native_profiler");
        $__internal_03f827ee7bfa6184354c8cffb512c72a8b03e082524d4cbdf7e2f411f0c6c4e7->enter($__internal_03f827ee7bfa6184354c8cffb512c72a8b03e082524d4cbdf7e2f411f0c6c4e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03f827ee7bfa6184354c8cffb512c72a8b03e082524d4cbdf7e2f411f0c6c4e7->leave($__internal_03f827ee7bfa6184354c8cffb512c72a8b03e082524d4cbdf7e2f411f0c6c4e7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b5054d400908060528fe8485adffd22bf46c25634ee7aa8eb484a3787bb5510 = $this->env->getExtension("native_profiler");
        $__internal_3b5054d400908060528fe8485adffd22bf46c25634ee7aa8eb484a3787bb5510->enter($__internal_3b5054d400908060528fe8485adffd22bf46c25634ee7aa8eb484a3787bb5510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_3b5054d400908060528fe8485adffd22bf46c25634ee7aa8eb484a3787bb5510->leave($__internal_3b5054d400908060528fe8485adffd22bf46c25634ee7aa8eb484a3787bb5510_prof);

    }

    public function getTemplateName()
    {
        return "user/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>User edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('user_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

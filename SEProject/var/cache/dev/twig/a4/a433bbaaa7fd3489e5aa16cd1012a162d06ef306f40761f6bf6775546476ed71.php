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
            'authenticatedUsername' => array($this, 'block_authenticatedUsername'),
            'contentdetail' => array($this, 'block_contentdetail'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f762c18678016cb0bc73a11f2fa3cb64c58a98f5508df7ca0fc2514fc4656206 = $this->env->getExtension("native_profiler");
        $__internal_f762c18678016cb0bc73a11f2fa3cb64c58a98f5508df7ca0fc2514fc4656206->enter($__internal_f762c18678016cb0bc73a11f2fa3cb64c58a98f5508df7ca0fc2514fc4656206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f762c18678016cb0bc73a11f2fa3cb64c58a98f5508df7ca0fc2514fc4656206->leave($__internal_f762c18678016cb0bc73a11f2fa3cb64c58a98f5508df7ca0fc2514fc4656206_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_01ff7592cd5d146ddecc2d4e1ddaf3012fd3034ca9497a9b599a83530c89729b = $this->env->getExtension("native_profiler");
        $__internal_01ff7592cd5d146ddecc2d4e1ddaf3012fd3034ca9497a9b599a83530c89729b->enter($__internal_01ff7592cd5d146ddecc2d4e1ddaf3012fd3034ca9497a9b599a83530c89729b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@SEP/Default/userid.html.twig");
        
        $__internal_01ff7592cd5d146ddecc2d4e1ddaf3012fd3034ca9497a9b599a83530c89729b->leave($__internal_01ff7592cd5d146ddecc2d4e1ddaf3012fd3034ca9497a9b599a83530c89729b_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_c695fa3422cf64c418dc3a70ce98cf2f147268c7d9e5afdd85771aaaf3cdf066 = $this->env->getExtension("native_profiler");
        $__internal_c695fa3422cf64c418dc3a70ce98cf2f147268c7d9e5afdd85771aaaf3cdf066->enter($__internal_c695fa3422cf64c418dc3a70ce98cf2f147268c7d9e5afdd85771aaaf3cdf066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 5
        echo "    <h1>User edit</h1>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <br>
            <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\" class=\"btn btn-primary\">Back to the list</a>
            <br>
        </li>
        <li>
            ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_c695fa3422cf64c418dc3a70ce98cf2f147268c7d9e5afdd85771aaaf3cdf066->leave($__internal_c695fa3422cf64c418dc3a70ce98cf2f147268c7d9e5afdd85771aaaf3cdf066_prof);

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
        return array (  86 => 21,  81 => 19,  74 => 15,  66 => 10,  61 => 8,  57 => 7,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block authenticatedUsername %}{{ include('@SEP/Default/userid.html.twig') }}{% endblock authenticatedUsername %}*/
/* {% block contentdetail %}*/
/*     <h1>User edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <br>*/
/*             <a href="{{ path('user_index') }}" class="btn btn-primary">Back to the list</a>*/
/*             <br>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
/* */

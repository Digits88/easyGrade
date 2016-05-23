<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2dc083dc11241fcece7185cc77e5a970fc519e8b64e693bdc368cf6a3e072b78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_102e72cb9631ee892205596aa657cccf67c43878c4c90278a92ec23a88337b97 = $this->env->getExtension("native_profiler");
        $__internal_102e72cb9631ee892205596aa657cccf67c43878c4c90278a92ec23a88337b97->enter($__internal_102e72cb9631ee892205596aa657cccf67c43878c4c90278a92ec23a88337b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_102e72cb9631ee892205596aa657cccf67c43878c4c90278a92ec23a88337b97->leave($__internal_102e72cb9631ee892205596aa657cccf67c43878c4c90278a92ec23a88337b97_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5d7e8d3b114c296d8fe992e036ee3acde376f77f40b5bfe136d6243bace9aaa7 = $this->env->getExtension("native_profiler");
        $__internal_5d7e8d3b114c296d8fe992e036ee3acde376f77f40b5bfe136d6243bace9aaa7->enter($__internal_5d7e8d3b114c296d8fe992e036ee3acde376f77f40b5bfe136d6243bace9aaa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5d7e8d3b114c296d8fe992e036ee3acde376f77f40b5bfe136d6243bace9aaa7->leave($__internal_5d7e8d3b114c296d8fe992e036ee3acde376f77f40b5bfe136d6243bace9aaa7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b8d9702ccbf5a562fed60b5a7548b69d06ad57c3b7e164f9f7bb3ebd3f57bd16 = $this->env->getExtension("native_profiler");
        $__internal_b8d9702ccbf5a562fed60b5a7548b69d06ad57c3b7e164f9f7bb3ebd3f57bd16->enter($__internal_b8d9702ccbf5a562fed60b5a7548b69d06ad57c3b7e164f9f7bb3ebd3f57bd16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b8d9702ccbf5a562fed60b5a7548b69d06ad57c3b7e164f9f7bb3ebd3f57bd16->leave($__internal_b8d9702ccbf5a562fed60b5a7548b69d06ad57c3b7e164f9f7bb3ebd3f57bd16_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_480f478869c7384f8ee9d1dd4c9c119e3ffb5f594edbafce890ed5fffd8249bc = $this->env->getExtension("native_profiler");
        $__internal_480f478869c7384f8ee9d1dd4c9c119e3ffb5f594edbafce890ed5fffd8249bc->enter($__internal_480f478869c7384f8ee9d1dd4c9c119e3ffb5f594edbafce890ed5fffd8249bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_480f478869c7384f8ee9d1dd4c9c119e3ffb5f594edbafce890ed5fffd8249bc->leave($__internal_480f478869c7384f8ee9d1dd4c9c119e3ffb5f594edbafce890ed5fffd8249bc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */

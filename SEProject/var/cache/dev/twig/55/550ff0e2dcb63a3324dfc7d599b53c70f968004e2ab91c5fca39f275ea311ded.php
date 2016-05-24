<?php

/* batchassignment/courseassignment.html.twig */
class __TwigTemplate_da27cf15beb7242bdffbe05c3071e5b5ea44a51d10a23d7f8575b9253b6c3ecc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "batchassignment/courseassignment.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'headerdetail' => array($this, 'block_headerdetail'),
            'modulename' => array($this, 'block_modulename'),
            'contentdetail' => array($this, 'block_contentdetail'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8d5fca005599dec75f8afdfc4e580a882890062533b7af03cb9803ff5ae0375 = $this->env->getExtension("native_profiler");
        $__internal_b8d5fca005599dec75f8afdfc4e580a882890062533b7af03cb9803ff5ae0375->enter($__internal_b8d5fca005599dec75f8afdfc4e580a882890062533b7af03cb9803ff5ae0375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "batchassignment/courseassignment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8d5fca005599dec75f8afdfc4e580a882890062533b7af03cb9803ff5ae0375->leave($__internal_b8d5fca005599dec75f8afdfc4e580a882890062533b7af03cb9803ff5ae0375_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7fc1c94278247772bc2bf349b187af0e5ae0362c075177689da7c92ba6a4df8e = $this->env->getExtension("native_profiler");
        $__internal_7fc1c94278247772bc2bf349b187af0e5ae0362c075177689da7c92ba6a4df8e->enter($__internal_7fc1c94278247772bc2bf349b187af0e5ae0362c075177689da7c92ba6a4df8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Course";
        
        $__internal_7fc1c94278247772bc2bf349b187af0e5ae0362c075177689da7c92ba6a4df8e->leave($__internal_7fc1c94278247772bc2bf349b187af0e5ae0362c075177689da7c92ba6a4df8e_prof);

    }

    // line 5
    public function block_headerdetail($context, array $blocks = array())
    {
        $__internal_3cb9e2c0678b4df44df6e425b3dc90ddd57754df0d4cc631f6a7024b96f9f21b = $this->env->getExtension("native_profiler");
        $__internal_3cb9e2c0678b4df44df6e425b3dc90ddd57754df0d4cc631f6a7024b96f9f21b->enter($__internal_3cb9e2c0678b4df44df6e425b3dc90ddd57754df0d4cc631f6a7024b96f9f21b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerdetail"));

        // line 6
        echo "    ";
        $this->displayParentBlock("headerdetail", $context, $blocks);
        echo "
    <meta name=\"theme-color\" content=\"#3e454c\">
";
        
        $__internal_3cb9e2c0678b4df44df6e425b3dc90ddd57754df0d4cc631f6a7024b96f9f21b->leave($__internal_3cb9e2c0678b4df44df6e425b3dc90ddd57754df0d4cc631f6a7024b96f9f21b_prof);

    }

    // line 11
    public function block_modulename($context, array $blocks = array())
    {
        $__internal_3ab4cb53f853dd3aee6b972d53e5fde1aae73abf8089d7efc291d5afdf5f8c4d = $this->env->getExtension("native_profiler");
        $__internal_3ab4cb53f853dd3aee6b972d53e5fde1aae73abf8089d7efc291d5afdf5f8c4d->enter($__internal_3ab4cb53f853dd3aee6b972d53e5fde1aae73abf8089d7efc291d5afdf5f8c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modulename"));

        echo "Programming Fundamentals";
        
        $__internal_3ab4cb53f853dd3aee6b972d53e5fde1aae73abf8089d7efc291d5afdf5f8c4d->leave($__internal_3ab4cb53f853dd3aee6b972d53e5fde1aae73abf8089d7efc291d5afdf5f8c4d_prof);

    }

    // line 12
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_fa6a6fbba881811550161c85341ef2104c4dd6cd80b127c1bd7cda0e572598a1 = $this->env->getExtension("native_profiler");
        $__internal_fa6a6fbba881811550161c85341ef2104c4dd6cd80b127c1bd7cda0e572598a1->enter($__internal_fa6a6fbba881811550161c85341ef2104c4dd6cd80b127c1bd7cda0e572598a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 13
        echo "    ";
        $this->displayParentBlock("contentdetail", $context, $blocks);
        echo "
    <div class=\"col-md-6\">
        <div class=\"form-group\">
            <label>Batch</label>
            <select class=\"form-control select2\" style=\"width: 100%;\">
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["batchAssignments"]) ? $context["batchAssignments"] : $this->getContext($context, "batchAssignments")));
        foreach ($context['_seq'] as $context["_key"] => $context["batchAssignment"]) {
            // line 19
            echo "                <option selected=\"selected\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("batchassignment_show", array("id" => $this->getAttribute($context["batchAssignment"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["batchAssignment"], "batchid", array()), "html", null, true);
            echo "</a></option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['batchAssignment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "            </select>
        </div>
    </div>


    <div class=\"col-md-6\">
        <div class=\"form-group\">
            <label>Assignment</label>
            <select class=\"form-control select2\" style=\"width: 100%;\">
            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["batchAssignments"]) ? $context["batchAssignments"] : $this->getContext($context, "batchAssignments")));
        foreach ($context['_seq'] as $context["_key"] => $context["batchAssignment"]) {
            // line 31
            echo "                <option selected=\"selected\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["batchAssignment"], "assignmentname", array()), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['batchAssignment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "            </select>
        </div>
        <form>
            <a href=\"#\" class=\"btn btn-success\">Go to Selected</a>
        </form>



    </div>




";
        
        $__internal_fa6a6fbba881811550161c85341ef2104c4dd6cd80b127c1bd7cda0e572598a1->leave($__internal_fa6a6fbba881811550161c85341ef2104c4dd6cd80b127c1bd7cda0e572598a1_prof);

    }

    public function getTemplateName()
    {
        return "batchassignment/courseassignment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 33,  123 => 31,  119 => 30,  108 => 21,  97 => 19,  93 => 18,  84 => 13,  78 => 12,  66 => 11,  55 => 6,  49 => 5,  37 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}Course{% endblock %}*/
/* */
/* {% block headerdetail %}*/
/*     {{ parent() }}*/
/*     <meta name="theme-color" content="#3e454c">*/
/* {% endblock %}*/
/* */
/* */
/* {% block modulename %}Programming Fundamentals{% endblock %}*/
/* {% block contentdetail %}*/
/*     {{ parent() }}*/
/*     <div class="col-md-6">*/
/*         <div class="form-group">*/
/*             <label>Batch</label>*/
/*             <select class="form-control select2" style="width: 100%;">*/
/*             {% for batchAssignment in batchAssignments %}*/
/*                 <option selected="selected"><a href="{{ path('batchassignment_show', { 'id': batchAssignment.id }) }}">{{ batchAssignment.batchid }}</a></option>*/
/*             {% endfor %}*/
/*             </select>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/*     <div class="col-md-6">*/
/*         <div class="form-group">*/
/*             <label>Assignment</label>*/
/*             <select class="form-control select2" style="width: 100%;">*/
/*             {% for batchAssignment in batchAssignments %}*/
/*                 <option selected="selected">{{ batchAssignment.assignmentname }}</option>*/
/*             {% endfor %}*/
/*             </select>*/
/*         </div>*/
/*         <form>*/
/*             <a href="#" class="btn btn-success">Go to Selected</a>*/
/*         </form>*/
/* */
/* */
/* */
/*     </div>*/
/* */
/* */
/* */
/* */
/* {% endblock %}*/

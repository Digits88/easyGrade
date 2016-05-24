<?php

/* batchassignment/index.html.twig */
class __TwigTemplate_318a758ffc949f712435159d5346c87722fa321182fc7dddf775eac48bd54cf2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "batchassignment/index.html.twig", 1);
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
        $__internal_fb9e2c05170c4b342230c05fa988a7c9883cb92787259e306bdd23a2073dd611 = $this->env->getExtension("native_profiler");
        $__internal_fb9e2c05170c4b342230c05fa988a7c9883cb92787259e306bdd23a2073dd611->enter($__internal_fb9e2c05170c4b342230c05fa988a7c9883cb92787259e306bdd23a2073dd611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "batchassignment/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb9e2c05170c4b342230c05fa988a7c9883cb92787259e306bdd23a2073dd611->leave($__internal_fb9e2c05170c4b342230c05fa988a7c9883cb92787259e306bdd23a2073dd611_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_19fb8babb7f148973a2178301b349274fd1257b62b4aa6f42a4fea8d031df23d = $this->env->getExtension("native_profiler");
        $__internal_19fb8babb7f148973a2178301b349274fd1257b62b4aa6f42a4fea8d031df23d->enter($__internal_19fb8babb7f148973a2178301b349274fd1257b62b4aa6f42a4fea8d031df23d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>BatchAssignment list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Batchid</th>
                <th>Assignmentid</th>
                <th>Actions</th>
                <th>AssignmentName</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["batchAssignments"]) ? $context["batchAssignments"] : $this->getContext($context, "batchAssignments")));
        foreach ($context['_seq'] as $context["_key"] => $context["batchAssignment"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("batchassignment_show", array("id" => $this->getAttribute($context["batchAssignment"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["batchAssignment"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["batchAssignment"], "batchid", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["batchAssignment"], "assignmentid", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("batchassignment_show", array("id" => $this->getAttribute($context["batchAssignment"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("batchassignment_edit", array("id" => $this->getAttribute($context["batchAssignment"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["batchAssignment"], "assignmentname", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['batchAssignment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("batchassignment_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_19fb8babb7f148973a2178301b349274fd1257b62b4aa6f42a4fea8d031df23d->leave($__internal_19fb8babb7f148973a2178301b349274fd1257b62b4aa6f42a4fea8d031df23d_prof);

    }

    public function getTemplateName()
    {
        return "batchassignment/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 40,  101 => 35,  92 => 32,  85 => 28,  79 => 25,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>BatchAssignment list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Batchid</th>*/
/*                 <th>Assignmentid</th>*/
/*                 <th>Actions</th>*/
/*                 <th>AssignmentName</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for batchAssignment in batchAssignments %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('batchassignment_show', { 'id': batchAssignment.id }) }}">{{ batchAssignment.id }}</a></td>*/
/*                 <td>{{ batchAssignment.batchid }}</td>*/
/*                 <td>{{ batchAssignment.assignmentid }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('batchassignment_show', { 'id': batchAssignment.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('batchassignment_edit', { 'id': batchAssignment.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*                 <td>{{ batchAssignment.assignmentname }}</td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('batchassignment_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

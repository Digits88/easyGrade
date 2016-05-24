<?php

/* assignment/index.html.twig */
class __TwigTemplate_68eaab35e321131110966e680fbb22cbad0e84245d1db712834dd128f0324fe6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "assignment/index.html.twig", 1);
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
        $__internal_0862bf3ece6d8f7c322a41859ce1c306d834cca57b7314766fe00a80430889e0 = $this->env->getExtension("native_profiler");
        $__internal_0862bf3ece6d8f7c322a41859ce1c306d834cca57b7314766fe00a80430889e0->enter($__internal_0862bf3ece6d8f7c322a41859ce1c306d834cca57b7314766fe00a80430889e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "assignment/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0862bf3ece6d8f7c322a41859ce1c306d834cca57b7314766fe00a80430889e0->leave($__internal_0862bf3ece6d8f7c322a41859ce1c306d834cca57b7314766fe00a80430889e0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0a0ebf56bdf010219810e232cab8df4a2015aeaf18d23cb6a98367d7ac4da29 = $this->env->getExtension("native_profiler");
        $__internal_d0a0ebf56bdf010219810e232cab8df4a2015aeaf18d23cb6a98367d7ac4da29->enter($__internal_d0a0ebf56bdf010219810e232cab8df4a2015aeaf18d23cb6a98367d7ac4da29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Assignment list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Courseid</th>
                <th>Assignmentid</th>
                <th>Assignmentname</th>
                <th>Assignmentdescription</th>
                <th>Testcaseinputs</th>
                <th>Testcaseoutputs</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["assignments"]) ? $context["assignments"] : $this->getContext($context, "assignments")));
        foreach ($context['_seq'] as $context["_key"] => $context["assignment"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("assignment_show", array("id" => $this->getAttribute($context["assignment"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["assignment"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["assignment"], "courseid", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["assignment"], "assignmentid", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["assignment"], "assignmentname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["assignment"], "assignmentdescription", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["assignment"], "testcaseinputs", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["assignment"], "testcaseoutputs", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("assignment_show", array("id" => $this->getAttribute($context["assignment"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("assignment_edit", array("id" => $this->getAttribute($context["assignment"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['assignment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("assignment_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_d0a0ebf56bdf010219810e232cab8df4a2015aeaf18d23cb6a98367d7ac4da29->leave($__internal_d0a0ebf56bdf010219810e232cab8df4a2015aeaf18d23cb6a98367d7ac4da29_prof);

    }

    public function getTemplateName()
    {
        return "assignment/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 46,  116 => 41,  104 => 35,  98 => 32,  91 => 28,  87 => 27,  83 => 26,  79 => 25,  75 => 24,  71 => 23,  65 => 22,  62 => 21,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Assignment list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Courseid</th>*/
/*                 <th>Assignmentid</th>*/
/*                 <th>Assignmentname</th>*/
/*                 <th>Assignmentdescription</th>*/
/*                 <th>Testcaseinputs</th>*/
/*                 <th>Testcaseoutputs</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for assignment in assignments %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('assignment_show', { 'id': assignment.id }) }}">{{ assignment.id }}</a></td>*/
/*                 <td>{{ assignment.courseid }}</td>*/
/*                 <td>{{ assignment.assignmentid }}</td>*/
/*                 <td>{{ assignment.assignmentname }}</td>*/
/*                 <td>{{ assignment.assignmentdescription }}</td>*/
/*                 <td>{{ assignment.testcaseinputs }}</td>*/
/*                 <td>{{ assignment.testcaseoutputs }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('assignment_show', { 'id': assignment.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('assignment_edit', { 'id': assignment.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('assignment_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

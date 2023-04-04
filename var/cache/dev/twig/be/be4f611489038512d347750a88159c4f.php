<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* table/formulaire.html.twig */
class __TwigTemplate_0a0ddc053da1333d628ab79d77879cf7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "table/formulaire.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "table/formulaire.html.twig"));

        // line 1
        echo "
<h1>Hello World  BOMBA !</h1>
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'form');
        echo "
<h1>Table de ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "</h1>
<table>
  <thead>
    <tr>
      <th>Multiplication</th>
      <th>Resultat</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 14
            echo "      <tr>
        <td>";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 15, $this->source); })()), "html", null, true);
            echo " x ";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</td>
        <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["valeursCalculees"]) || array_key_exists("valeursCalculees", $context) ? $context["valeursCalculees"] : (function () { throw new RuntimeError('Variable "valeursCalculees" does not exist.', 16, $this->source); })()), ($context["i"] - 1), [], "array", false, false, false, 16), "html", null, true);
            echo "</td>
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "  </tbody>
</table> ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "table/formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 19,  76 => 16,  70 => 15,  67 => 14,  63 => 13,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<h1>Hello World  BOMBA !</h1>
{{ form(form) }}
<h1>Table de {{ nombre }}</h1>
<table>
  <thead>
    <tr>
      <th>Multiplication</th>
      <th>Resultat</th>
    </tr>
  </thead>
  <tbody>
    {% for i in 1..10 %}
      <tr>
        <td>{{ nombre }} x {{ i }}</td>
        <td>{{ valeursCalculees[i-1] }}</td>
      </tr>
    {% endfor %}
  </tbody>
</table> ", "table/formulaire.html.twig", "/home/vboxuser/project1/templates/table/formulaire.html.twig");
    }
}

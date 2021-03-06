<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_241739abe4cda1f91bbb6063d23279112a7c3bba9ebb0d6728233cf99b7077b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd544e74e456669784e06483139c437693133a6f0ac058875da7fe75fed2fd2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd544e74e456669784e06483139c437693133a6f0ac058875da7fe75fed2fd2c->enter($__internal_cd544e74e456669784e06483139c437693133a6f0ac058875da7fe75fed2fd2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd544e74e456669784e06483139c437693133a6f0ac058875da7fe75fed2fd2c->leave($__internal_cd544e74e456669784e06483139c437693133a6f0ac058875da7fe75fed2fd2c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f1dfc41d49ec119c0e8a61f234a305355799da2236278a202ff967fe98bd48d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1dfc41d49ec119c0e8a61f234a305355799da2236278a202ff967fe98bd48d7->enter($__internal_f1dfc41d49ec119c0e8a61f234a305355799da2236278a202ff967fe98bd48d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f1dfc41d49ec119c0e8a61f234a305355799da2236278a202ff967fe98bd48d7->leave($__internal_f1dfc41d49ec119c0e8a61f234a305355799da2236278a202ff967fe98bd48d7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec336d34680141a632030f2419a543a4163448a72972de5f77453d1844df0d21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec336d34680141a632030f2419a543a4163448a72972de5f77453d1844df0d21->enter($__internal_ec336d34680141a632030f2419a543a4163448a72972de5f77453d1844df0d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ec336d34680141a632030f2419a543a4163448a72972de5f77453d1844df0d21->leave($__internal_ec336d34680141a632030f2419a543a4163448a72972de5f77453d1844df0d21_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3fe1d51840f90973fc3db1983fdd0a37b414efad846a739b9884b99a400d2f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3fe1d51840f90973fc3db1983fdd0a37b414efad846a739b9884b99a400d2f0->enter($__internal_d3fe1d51840f90973fc3db1983fdd0a37b414efad846a739b9884b99a400d2f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_d3fe1d51840f90973fc3db1983fdd0a37b414efad846a739b9884b99a400d2f0->leave($__internal_d3fe1d51840f90973fc3db1983fdd0a37b414efad846a739b9884b99a400d2f0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/Users/aleksandra/myaso/oqrooms/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}

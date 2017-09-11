<?php

/* modules/betterlogin/templates/page--user--login.html.twig */
class __TwigTemplate_3df3151d9a3d517e19bae273c6a89f4a16d4bb5442a6388f76540377d2e7857c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array("t" => 19);
        $functions = array("url" => 4, "path" => 19);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array('t'),
                array('url', 'path')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<div id=\"auth_box\" class=\"login\">
  <div id=\"top_part\">
    <h1 id=\"the_logo\">
      <a href=\"";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getUrl("<front>")));
        echo "\">
        <img src=\"http://www.bancoestado.cl/imagenes/_img/logo-banco-estado.jpg\" alt=\"";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
        echo "\" />
      </a>
    </h1>
  </div>
  <div id=\"title_header\">
  </div>
  <div class=\"panel-heading\">Ingreso</div>
  <div id=\"middle_part\">
    ";
        // line 13
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["messages"]) ? $context["messages"] : null), "html", null, true));
        echo "

    ";
        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "

    <div id=\"bottom_part\">
      <div class=\"password_link\">
        <a href=\"";
        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("user.pass")));
        echo "\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Forgot your password?")));
        echo "</a>
      </div>
    </div>
  </div>


</div>
";
    }

    public function getTemplateName()
    {
        return "modules/betterlogin/templates/page--user--login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 19,  68 => 15,  63 => 13,  52 => 5,  48 => 4,  43 => 1,);
    }

    public function getSource()
    {
        return "<div id=\"auth_box\" class=\"login\">
  <div id=\"top_part\">
    <h1 id=\"the_logo\">
      <a href=\"{{ url('<front>') }}\">
        <img src=\"http://www.bancoestado.cl/imagenes/_img/logo-banco-estado.jpg\" alt=\"{{ site_name }}\" />
      </a>
    </h1>
  </div>
  <div id=\"title_header\">
  </div>
  <div class=\"panel-heading\">Ingreso</div>
  <div id=\"middle_part\">
    {{ messages }}

    {{ page.content }}

    <div id=\"bottom_part\">
      <div class=\"password_link\">
        <a href=\"{{ path('user.pass') }}\">{{ 'Forgot your password?'|t }}</a>
      </div>
    </div>
  </div>


</div>
";
    }
}

<?php

/* modules/betterlogin/templates/page--user--reset.html.twig */
class __TwigTemplate_02cfc376c8cac2aadcee21ed405da2729622e3c17aa344c397c8d4858e3ceebd extends Twig_Template
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
        $filters = array("t" => 20);
        $functions = array("url" => 4, "path" => 20);

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
        echo "<div id=\"auth_box\" class=\"reset\">
  <div id=\"top_part\">
    <h1 id=\"the_logo\">
      <a href=\"";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getUrl("<front>")));
        echo "\">
        <img src=\"";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["logo"]) ? $context["logo"] : null), "html", null, true));
        echo "\" alt=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
        echo "\" />
      </a>
    </h1>
  </div>

  <div id=\"middle_part\">
    <h2 class=\"title\">";
        // line 11
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</h2>

    ";
        // line 13
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["messages"]) ? $context["messages"] : null), "html", null, true));
        echo "

    ";
        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
  </div>

  <div id=\"bottom_part\">
    <div class=\"login_link\">
      <a href=\"";
        // line 20
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("user.login")));
        echo "\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Login")));
        echo "</a>
    </div>

    <div class=\"register_link\">
      <a href=\"";
        // line 24
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("user.register")));
        echo "\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Register a new account")));
        echo "</a>
    </div>

    <div class=\"back_link\">
      <a href=\"";
        // line 28
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getUrl("<front>")));
        echo "\">&larr; ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Back")));
        echo " ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
        echo "</a>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/betterlogin/templates/page--user--reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 28,  90 => 24,  81 => 20,  73 => 15,  68 => 13,  63 => 11,  52 => 5,  48 => 4,  43 => 1,);
    }

    public function getSource()
    {
        return "<div id=\"auth_box\" class=\"reset\">
  <div id=\"top_part\">
    <h1 id=\"the_logo\">
      <a href=\"{{ url('<front>') }}\">
        <img src=\"{{ logo }}\" alt=\"{{ site_name }}\" />
      </a>
    </h1>
  </div>

  <div id=\"middle_part\">
    <h2 class=\"title\">{{ title }}</h2>

    {{ messages }}

    {{ page.content }}
  </div>

  <div id=\"bottom_part\">
    <div class=\"login_link\">
      <a href=\"{{ path('user.login') }}\">{{ 'Login'|t }}</a>
    </div>

    <div class=\"register_link\">
      <a href=\"{{ path('user.register') }}\">{{ 'Register a new account'|t }}</a>
    </div>

    <div class=\"back_link\">
      <a href=\"{{ url('<front>') }}\">&larr; {{ 'Back'|t }} {{ site_name }}</a>
    </div>
  </div>
</div>
";
    }
}

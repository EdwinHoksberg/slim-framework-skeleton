<?php

/* templates/master.twig */
class __TwigTemplate_2e133ff00cdd7f15751f35e970ca7897ae46bf0b67866853ebaa1ee022655bfa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <base href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "\">

    <title>Slim Skeleton</title>

    <!-- realfavicongenerator.net icons here -->

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/css/app.css\">
</head>
<body>

";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "
<script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/js/app.js\"></script>
</body>
</html>
";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "templates/master.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 17,  49 => 19,  46 => 18,  44 => 17,  37 => 13,  28 => 7,  20 => 1,);
    }
}

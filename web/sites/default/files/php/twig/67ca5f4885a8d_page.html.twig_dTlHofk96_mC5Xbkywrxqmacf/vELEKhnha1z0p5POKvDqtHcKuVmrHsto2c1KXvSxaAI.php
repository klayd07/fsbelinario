<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom/new_theme/templates/layout/page.html.twig */
class __TwigTemplate_0e64fd8eae580b140154f59240a3305c extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"";
        // line 2
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "language_code", [], "any", false, false, true, 2), "html", null, true);
        yield "\">
<head>
  <meta charset=\"utf-8\">
  <title>";
        // line 5
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, ($context["head_title"] ?? null), " | "));
        yield "</title>
  ";
        // line 6
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["head"] ?? null), "html", null, true);
        yield "
  ";
        // line 7
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["styles"] ?? null), "html", null, true);
        yield "
  ";
        // line 8
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["scripts"] ?? null), "html", null, true);
        yield "
</head>
<body>

  <header class=\"site-header\">
    <div class=\"header-container\">
        ";
        // line 14
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 14)) {
            // line 15
            yield "            ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 15), "html", null, true);
            yield "  ";
            // line 16
            yield "        ";
        } else {
            // line 17
            yield "            <p>No blocks found in header region.</p>
        ";
        }
        // line 19
        yield "    </div>
  </header>

  <main>
    ";
        // line 23
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 23)) {
            // line 24
            yield "  <section class=\"hero\">
    ";
            // line 25
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 25));
            yield " ";
            // line 26
            yield "    <div class=\"hero-content\">
      <h1>GET STARTED WORK WITH US</h1>
      <p>Your trusted partner in accounting and financial services.</p>
      <a href=\"#\" class=\"btn\">Get Started</a>
    </div>
  </section>
";
        }
        // line 33
        yield "

    <div class=\"content\">
      ";
        // line 36
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 36), "html", null, true);
        yield "
    </div>
  </main>

  <footer>
    ";
        // line 41
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 41)) {
            // line 42
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 42), "html", null, true);
            yield "
    ";
        }
        // line 44
        yield "  </footer>

  ";
        // line 46
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "scripts", [], "any", false, false, true, 46), "html", null, true);
        yield "

</body>
</html>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["language", "head_title", "head", "styles", "scripts", "page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/new_theme/templates/layout/page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  135 => 46,  131 => 44,  125 => 42,  123 => 41,  115 => 36,  110 => 33,  101 => 26,  98 => 25,  95 => 24,  93 => 23,  87 => 19,  83 => 17,  80 => 16,  76 => 15,  74 => 14,  65 => 8,  61 => 7,  57 => 6,  53 => 5,  47 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ language.language_code }}\">
<head>
  <meta charset=\"utf-8\">
  <title>{{ head_title|safe_join(' | ') }}</title>
  {{ head }}
  {{ styles }}
  {{ scripts }}
</head>
<body>

  <header class=\"site-header\">
    <div class=\"header-container\">
        {% if page.header %}
            {{ page.header }}  {# This will load blocks assigned to the \"header\" region #}
        {% else %}
            <p>No blocks found in header region.</p>
        {% endif %}
    </div>
  </header>

  <main>
    {% if page.hero %}
  <section class=\"hero\">
    {{ page.hero|raw }} {# Background image will be added via a block #}
    <div class=\"hero-content\">
      <h1>GET STARTED WORK WITH US</h1>
      <p>Your trusted partner in accounting and financial services.</p>
      <a href=\"#\" class=\"btn\">Get Started</a>
    </div>
  </section>
{% endif %}


    <div class=\"content\">
      {{ page.content }}
    </div>
  </main>

  <footer>
    {% if page.footer %}
      {{ page.footer }}
    {% endif %}
  </footer>

  {{ page.scripts }}

</body>
</html>
", "themes/custom/new_theme/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\belinario\\web\\themes\\custom\\new_theme\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 14];
        static $filters = ["escape" => 2, "safe_join" => 5, "raw" => 25];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'safe_join', 'raw'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}

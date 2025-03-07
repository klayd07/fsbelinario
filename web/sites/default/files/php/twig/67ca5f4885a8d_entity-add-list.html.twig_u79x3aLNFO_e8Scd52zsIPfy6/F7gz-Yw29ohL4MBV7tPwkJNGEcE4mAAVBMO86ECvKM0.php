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

/* @claro/entity-add-list.html.twig */
class __TwigTemplate_f582ea771dde0c32b672547bcc957c46 extends Template
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
        // line 19
        $context["item_classes"] = ["admin-item"];
        // line 23
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["bundles"] ?? null))) {
            // line 24
            yield "  <dl";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["admin-list"], "method", false, false, true, 24), "html", null, true);
            yield ">
    ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["bundles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["bundle"]) {
                // line 26
                yield "      ";
                // line 30
                yield "      ";
                $context["bundle_attributes"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bundle"], "add_link", [], "any", false, false, true, 30), "url", [], "any", false, false, true, 30), "getOption", ["attributes"], "method", false, false, true, 30)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bundle"], "add_link", [], "any", false, false, true, 30), "url", [], "any", false, false, true, 30), "getOption", ["attributes"], "method", false, false, true, 30)) : ([]));
                // line 31
                yield "      ";
                $context["link_attributes"] = CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(($context["bundle_attributes"] ?? null)), "addClass", ["admin-item__link"], "method", false, false, true, 31);
                // line 32
                yield "      <div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["class" => ($context["item_classes"] ?? null)]), "html", null, true);
                yield ">
        <dt class=\"admin-item__title\">
          <a href=\"";
                // line 34
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bundle"], "add_link", [], "any", false, false, true, 34), "url", [], "any", false, false, true, 34), "html", null, true);
                yield "\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(($context["link_attributes"] ?? null), "href"), "html", null, true);
                yield ">
            ";
                // line 35
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bundle"], "add_link", [], "any", false, false, true, 35), "text", [], "any", false, false, true, 35), "html", null, true);
                yield "
          </a>
        </dt>
        ";
                // line 39
                yield "        ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["bundle"], "description", [], "any", false, false, true, 39)) {
                    // line 40
                    yield "          <dd class=\"admin-item__description\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["bundle"], "description", [], "any", false, false, true, 40), "html", null, true);
                    yield "</dd>
        ";
                }
                // line 42
                yield "      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['bundle'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            yield "  </dl>
";
        } elseif ( !Twig\Extension\CoreExtension::testEmpty(        // line 45
($context["add_bundle_message"] ?? null))) {
            // line 46
            yield "  <p>
    ";
            // line 47
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["add_bundle_message"] ?? null), "html", null, true);
            yield "
  </p>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["bundles", "attributes", "add_bundle_message"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@claro/entity-add-list.html.twig";
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
        return array (  107 => 47,  104 => 46,  102 => 45,  99 => 44,  92 => 42,  86 => 40,  83 => 39,  77 => 35,  71 => 34,  65 => 32,  62 => 31,  59 => 30,  57 => 26,  53 => 25,  48 => 24,  46 => 23,  44 => 19,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Theme override to present a list of available bundles.
 *
 * Available variables:
 * - bundles: A list of bundles, each with the following properties:
 *   - label: Bundle label.
 *   - description: Bundle description.
 *   - add_link: \\Drupal\\Core\\Link link instance to create an entity of this
 *     bundle.
 * - add_bundle_message: The message shown when there are no bundles. Only
 *     available if the entity type uses bundle entities.
 *
 * @see template_preprocess_entity_add_list()
 */
#}
{%
  set item_classes = [
    'admin-item',
  ]
%}
{% if bundles is not empty %}
  <dl{{ attributes.addClass('admin-list') }}>
    {% for bundle in bundles %}
      {#
        Add 'admin-item__link' class to the link attributes.
        This is needed for keeping the original attributes of the link's url.
      #}
      {% set bundle_attributes = bundle.add_link.url.getOption('attributes') ?: {} %}
      {% set link_attributes = create_attribute(bundle_attributes).addClass('admin-item__link') %}
      <div{{ create_attribute({class: item_classes}) }}>
        <dt class=\"admin-item__title\">
          <a href=\"{{ bundle.add_link.url }}\"{{ link_attributes|without('href') }}>
            {{ bundle.add_link.text }}
          </a>
        </dt>
        {# Don't print empty description wrapper if there is no description #}
        {% if bundle.description %}
          <dd class=\"admin-item__description\">{{ bundle.description }}</dd>
        {% endif %}
      </div>
    {% endfor %}
  </dl>
{% elseif add_bundle_message is not empty %}
  <p>
    {{ add_bundle_message }}
  </p>
{% endif %}
", "@claro/entity-add-list.html.twig", "C:\\xampp\\htdocs\\belinario\\web\\core\\themes\\claro\\templates\\entity-add-list.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 19, "if" => 23, "for" => 25];
        static $filters = ["escape" => 24, "without" => 34];
        static $functions = ["create_attribute" => 31];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'without'],
                ['create_attribute'],
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

<?php

/* core/themes/stable/templates/admin/admin-block-content.html.twig */
class __TwigTemplate_56d9179b713d5f0fefd5046a932e68029a6036a2f32b91b85b83c2ed84f6d925 extends Twig_Template
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
        $tags = array("set" => 18, "if" => 23, "for" => 25);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'for'),
                array(),
                array()
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

        // line 18
        $context["classes"] = array(0 => "list-group", 1 => ((        // line 20
(isset($context["compact"]) ? $context["compact"] : null)) ? ("compact") : ("")));
        // line 23
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 24
            echo "  <dl";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo ">
    ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["content"]) ? $context["content"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 26
                echo "      <dt class=\"list-group__link\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "link", array()), "html", null, true));
                echo "</dt>
      ";
                // line 27
                if ($this->getAttribute($context["item"], "description", array())) {
                    // line 28
                    echo "        <dd class=\"list-group__description\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "description", array()), "html", null, true));
                    echo "</dd>
      ";
                }
                // line 30
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "  </dl>
";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/admin-block-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 31,  70 => 30,  64 => 28,  62 => 27,  57 => 26,  53 => 25,  48 => 24,  46 => 23,  44 => 20,  43 => 18,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override for the content of an administrative block.
 *
 * Available variables:
 * - content: A list containing information about the block. Each element
 *   of the array represents an administrative menu item, and must at least
 *   contain the keys 'title', 'link_path', and 'localized_options', which are
 *   passed to l(). A 'description' key may also be provided.
 * - attributes: HTML attributes to be added to the element.
 * - compact: Boolean indicating whether compact mode is turned on or not.
 *
 * @see template_preprocess_admin_block_content()
 */
#}
{%
  set classes = [
    'list-group',
    compact ? 'compact',
  ]
%}
{% if content %}
  <dl{{ attributes.addClass(classes) }}>
    {% for item in content %}
      <dt class=\"list-group__link\">{{ item.link }}</dt>
      {% if item.description %}
        <dd class=\"list-group__description\">{{ item.description }}</dd>
      {% endif %}
    {% endfor %}
  </dl>
{% endif %}
";
    }
}

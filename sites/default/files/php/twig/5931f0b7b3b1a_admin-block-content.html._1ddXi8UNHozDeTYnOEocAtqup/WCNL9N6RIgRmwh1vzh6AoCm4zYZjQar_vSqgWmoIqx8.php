<?php

/* core/modules/system/templates/admin-block-content.html.twig */
class __TwigTemplate_efa6ebf48ca981ffef2a1344b72e2c588ac9f47dffca58ce2a86e2d1da264e91 extends Twig_Template
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
        $tags = array("set" => 20, "if" => 25, "for" => 27);
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

        // line 20
        $context["classes"] = array(0 => "list-group", 1 => ((        // line 22
(isset($context["compact"]) ? $context["compact"] : null)) ? ("compact") : ("")));
        // line 25
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 26
            echo "  <dl";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo ">
    ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["content"]) ? $context["content"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 28
                echo "      <dt class=\"list-group__link\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "link", array()), "html", null, true));
                echo "</dt>
      ";
                // line 29
                if ($this->getAttribute($context["item"], "description", array())) {
                    // line 30
                    echo "        <dd class=\"list-group__description\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "description", array()), "html", null, true));
                    echo "</dd>
      ";
                }
                // line 32
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "  </dl>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/admin-block-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 33,  70 => 32,  64 => 30,  62 => 29,  57 => 28,  53 => 27,  48 => 26,  46 => 25,  44 => 22,  43 => 20,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation for the content of an administrative block.
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
 *
 * @ingroup themeable
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

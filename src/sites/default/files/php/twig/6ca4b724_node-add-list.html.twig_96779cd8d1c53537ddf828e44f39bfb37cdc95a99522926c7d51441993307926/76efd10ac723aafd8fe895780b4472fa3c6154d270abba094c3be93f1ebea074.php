<?php

/* core/themes/classy/templates/content-edit/node-add-list.html.twig */
class __TwigTemplate_9330c9b37c19bcce5f5474628f756487f8f4641e8bfae97a408a0ba44693a9c2 extends Twig_Template
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
        $tags = array("if" => 16, "for" => 18, "set" => 25, "trans" => 26);
        $filters = array();
        $functions = array("path" => 25);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for', 'set', 'trans'),
                array(),
                array('path')
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

        // line 16
        if ( !twig_test_empty((isset($context["types"]) ? $context["types"] : null))) {
            // line 17
            echo "  <dl class=\"node-type-list\">
    ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["types"]) ? $context["types"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 19
                echo "      <dt>";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["type"], "add_link", array()), "html", null, true));
                echo "</dt>
      <dd>";
                // line 20
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["type"], "description", array()), "html", null, true));
                echo "</dd>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "  </dl>
";
        } else {
            // line 24
            echo "  <p>
    ";
            // line 25
            $context["create_content"] = $this->env->getExtension('drupal_core')->getPath("node.type_add");
            // line 26
            echo "    ";
            echo t("You have not created any content types yet. Go to the <a href=\"@create_content\">content type creation page</a> to add a new content type.", array("@create_content" =>             // line 27
(isset($context["create_content"]) ? $context["create_content"] : null), ));
            // line 29
            echo "  </p>
";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/content-edit/node-add-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 29,  76 => 27,  74 => 26,  72 => 25,  69 => 24,  65 => 22,  57 => 20,  52 => 19,  48 => 18,  45 => 17,  43 => 16,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to list node types available for adding content.*/
/*  **/
/*  * This list is displayed on the Add content admin page.*/
/*  **/
/*  * Available variables:*/
/*  * - types: A list of content types, each with the following properties:*/
/*  *   - add_link: Link to create a piece of content of this type.*/
/*  *   - description: Description of this type of content.*/
/*  **/
/*  * @see template_preprocess_node_add_list()*/
/*  *//* */
/* #}*/
/* {% if types is not empty %}*/
/*   <dl class="node-type-list">*/
/*     {% for type in types %}*/
/*       <dt>{{ type.add_link }}</dt>*/
/*       <dd>{{ type.description }}</dd>*/
/*     {% endfor %}*/
/*   </dl>*/
/* {% else %}*/
/*   <p>*/
/*     {% set create_content = path('node.type_add') %}*/
/*     {% trans %}*/
/*       You have not created any content types yet. Go to the <a href="{{ create_content }}">content type creation page</a> to add a new content type.*/
/*     {% endtrans %}*/
/*   </p>*/
/* {% endif %}*/
/* */

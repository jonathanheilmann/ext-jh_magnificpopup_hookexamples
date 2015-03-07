.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt

.. _developerCorner_AjaxHook:

Ajax Hook
=========

(Available since version 0.3.0)

Use this hook if you want to add your own type to be opend as ajax lightbox. (See documentation of EXT:jh_magnificpopup) for more information about usage of this hook.

To test the provided example create a new content element of type "text" and add these html lines after klicking "Toggle text mode". Or create a new content element of type "HTML" and add these lines:

.. code-block:: html

  <p><a href="index.php?eID=jh_magnificpopup_ajax&jh_magnificpopup[type]=hookexample" class="mfp-ajax-link" data-htmlarea-external="1">hookexample</a> <span style="font-weight: bold;">without</span> hookConf</p>
  <p><a href="index.php?eID=jh_magnificpopup_ajax&jh_magnificpopup[type]=hookexample&jh_magnificpopup[hookConf]=aString" class="mfp-ajax-link" data-htmlarea-external="1">hookexample</a> <span style="font-weight: bold;">with</span> hookConf as String</p>
  <p><a href="index.php?eID=jh_magnificpopup_ajax&amp;jh_magnificpopup[type]=hookexample&amp;jh_magnificpopup[hookConf][0]=value0&jh_magnificpopup[hookConf][1]=value1" class="mfp-ajax-link" data-htmlarea-external="1">hookexample</a> <span style="font-weight: bold;">with</span> hookConf as Array</p>

The static “Magnific-Popup – Content Element (jh_mapgnificpopup)” is required in your template to use this example, the setting "magnificpopup.type.ajax.enableglobal" in Constant Editor is required to be set (true).

Files created or modified for this hook (in EXT:jh_magnificpopup_hookexamples):

* ext_localconf.php (modified)
* Classes/Hooks/EidTypeHook.php (created)
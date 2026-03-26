<?php
// Coached by Rutger - Main Landing Page
?>
<?php include 'partials/header.php'; ?>
<?php include 'partials/nav.php'; ?>

<!-- HERO -->
<section class="hero">
  <div class="hero-bg-circle hero-bg-circle-1"></div>
  <div class="hero-bg-circle hero-bg-circle-2"></div>
  <div class="hero-left">
    <span class="hero-eyebrow fade-up"><?php echo htmlspecialchars(t('hero.hero_eyebrow', 'Online Health Coaching voor Vrouwen')); ?></span>
    <h1 class="fade-up-2"><?php echo t('hero.fade_up_2', 'Voel je <em>goed</em> in je vel. Op een manier die blijft.'); ?></h1>
    <p class="hero-sub fade-up-3"><?php echo htmlspecialchars(t('hero.hero_sub', 'Duurzame verandering begint niet met een crashdieet of een streng schema. Met de Kaizen-methode bouw je stap voor stap aan gezonde gewoontes rondom voeding, beweging, slaap en energie. Zonder alles in één keer om te gooien.')); ?></p>
    <div class="hero-ctas fade-up-4">
      <a href="#kennismaking" class="btn-primary"><?php echo htmlspecialchars(t('hero.btn_primary', 'Plan een gratis kennismaking')); ?></a>
      <a href="#aanbod" class="btn-secondary"><?php echo htmlspecialchars(t('hero.btn_secondary', 'Bekijk het aanbod')); ?></a>
    </div>
    <div class="hero-trust fade-up-4">
      <div class="trust-item">
        <span class="trust-num"><?php echo htmlspecialchars(t('hero.trust_num', '6')); ?></span>
        <span class="trust-label"><?php echo htmlspecialchars(t('hero.trust_label', 'Maanden begeleiding')); ?></span>
      </div>
      <div class="trust-item">
        <span class="trust-num"><?php echo htmlspecialchars(t('hero.trust_num_2', '3')); ?></span>
        <span class="trust-label"><?php echo htmlspecialchars(t('hero.trust_label_2', 'Pijlers van gezondheid')); ?></span>
      </div>
      <div class="trust-item">
        <span class="trust-num"><?php echo htmlspecialchars(t('hero.trust_num_3', '100%')); ?></span>
        <span class="trust-label"><?php echo htmlspecialchars(t('hero.trust_label_3', 'Op jouw tempo')); ?></span>
      </div>
    </div>
  </div>
  <div class="hero-right">
    <div class="hero-visual">
      <div class="hero-card-main">
        <img src="/assets/img/rutger_in_actie01.jpeg" alt="<?php echo htmlspecialchars(t('hero.img_alt', 'Rutger in actie')); ?>">
        <div class="hero-card-main-inner">
          <span class="card-phase-badge"><?php echo htmlspecialchars(t('hero.card_phase_badge', 'Week 3 · Nieuwe gewoonte')); ?></span>
          <div class="card-phase-title"><?php echo htmlspecialchars(t('hero.card_phase_title', 'Energie, voeding & rust in balans')); ?></div>
          <div class="card-phase-sub"><?php echo htmlspecialchars(t('hero.card_phase_sub', 'Kleine aanpassingen die je lichaam écht voelt.')); ?></div>
        </div>
      </div>
      <div class="hero-dot-accent"></div>
      <div class="hero-card-float">
        <span class="float-icon"><?php echo t('hero.float_icon', '🌿'); ?></span>
        <div class="float-title"><?php echo htmlspecialchars(t('hero.float_title', 'Kaizen Aanpak')); ?></div>
        <div class="float-sub"><?php echo htmlspecialchars(t('hero.float_sub', 'Één kleine verbetering per week. Nooit alles tegelijk.')); ?></div>
      </div>
    </div>
  </div>
</section>

<div class="section-divider"></div>

<!-- PROBLEM -->
<section class="problem">
  <div class="problem-left">
    <span class="section-eyebrow"><?php echo htmlspecialchars(t('problem.section_eyebrow', 'Herken jij dit?')); ?></span>
    <h2><?php echo t('problem.h2_heading', 'Je doet je best,<br>maar het lichaam werkt <em>niet mee</em>'); ?></h2>
    <p class="body-text"><?php echo htmlspecialchars(t('problem.body_text', 'Je eet redelijk gezond, probeert actief te zijn en wil gewoon beter in je vel zitten. Maar je energieniveaus schieten alle kanten op, je slaap is niet optimaal, en duurzame verandering lijkt niet te willen plakken.')); ?></p>
    <p class="body-text"><?php echo htmlspecialchars(t('problem.body_text_2', 'Dat is geen teken van zwakte of gebrek aan discipline. De meeste programma\'s missen de kern: een aanpak die aansluit op hoe jóuw lichaam en leven er werkelijk uitzien.')); ?></p>
    <ul class="pain-list">
      <li><?php echo htmlspecialchars(t('problem.li_list_item_1', 'Vermoeid wakker worden, ook na een volledige nacht slaap')); ?></li>
      <li><?php echo htmlspecialchars(t('problem.li_list_item_2', 'Gewoontes die je begint maar na een paar weken weer loslaat')); ?></li>
      <li><?php echo htmlspecialchars(t('problem.li_list_item_3', 'Voeding die overweldigend aanvoelt. Wat is nu écht goed voor je?')); ?></li>
      <li><?php echo htmlspecialchars(t('problem.li_list_item_4', 'Stemmingswisselingen en energiedips die je niet kunt verklaren')); ?></li>
      <li><?php echo htmlspecialchars(t('problem.li_list_item_5', 'Het gevoel dat wat voor anderen werkt, voor jou niet werkt')); ?></li>
    </ul>
  </div>
  <div class="problem-right">
    <div class="quote-block">
      <p class="quote-text"><?php echo htmlspecialchars(t('problem.quote_text', '"Ik had al van alles geprobeerd. Diëten, supplementen, meer sporten. Pas toen ik leerde luisteren naar mijn cyclus begreep ik waarom mijn lichaam deed wat het deed. Eindelijk wist ik wat het écht nodig had."')); ?></p>
      <div class="quote-author"><?php echo htmlspecialchars(t('problem.quote_author', '— Sofie, 34 jaar · client Coached by Rutger')); ?></div>
    </div>
  </div>
</section>

<div class="section-divider"></div>

<!-- METHOD -->
<section class="method" id="methode">
  <div class="method-bg"></div>
  <div class="method-header">
    <span class="section-eyebrow"><?php echo htmlspecialchars(t('method.section_eyebrow', 'De Methode')); ?></span>
    <h2><?php echo t('method.h2_heading', 'Eén kleine stap per week.<br><em>Groot verschil</em> na zes maanden.'); ?></h2>
    <p class="body-text"><?php echo htmlspecialchars(t('method.body_text', 'De Kaizen-filosofie staat centraal in alles wat ik doe. Geen radicale veranderingen, geen alles-of-niets schema\'s. Drie pijlers, opgebouwd in jouw tempo.')); ?></p>
  </div>
  <div class="method-grid">
    <div class="method-phase">
      <div class="phase-num"><?php echo htmlspecialchars(t('method.phase_num', '01')); ?></div>
      <div class="phase-name"><?php echo htmlspecialchars(t('method.phase_name', 'Voeding')); ?></div>
      <div class="phase-days"><?php echo htmlspecialchars(t('method.phase_days', 'Fundament van energie & herstel')); ?></div>
      <p class="phase-desc"><?php echo htmlspecialchars(t('method.phase_desc', 'Niet diëten, maar begrijpen wat voeding doet in jouw lichaam. Welke voedingsmiddelen geven je energie, ondersteunen je spijsvertering en helpen je in balans te blijven?')); ?></p>
      <div class="phase-tags">
        <span class="phase-tag"><?php echo htmlspecialchars(t('method.phase_tag', 'Bewust eten')); ?></span>
        <span class="phase-tag"><?php echo htmlspecialchars(t('method.phase_tag_2', 'Darmgezondheid')); ?></span>
        <span class="phase-tag"><?php echo htmlspecialchars(t('method.phase_tag_3', 'Geen restricties')); ?></span>
      </div>
    </div>
    <div class="method-phase">
      <div class="phase-num"><?php echo htmlspecialchars(t('method.phase_num_2', '02')); ?></div>
      <div class="phase-name"><?php echo htmlspecialchars(t('method.phase_name_2', 'Leefstijl')); ?></div>
      <div class="phase-days"><?php echo htmlspecialchars(t('method.phase_days_2', 'Slaap, stress & beweging')); ?></div>
      <p class="phase-desc"><?php echo htmlspecialchars(t('method.phase_desc_2', 'Slaap, stressmanagement en beweging zijn geen luxe. Ze zijn de basis. We bouwen gewoontes op die passen bij jouw leven, niet bij een ideaalplaatje.')); ?></p>
      <div class="phase-tags">
        <span class="phase-tag"><?php echo htmlspecialchars(t('method.phase_tag_4', 'Slaaphygiëne')); ?></span>
        <span class="phase-tag"><?php echo htmlspecialchars(t('method.phase_tag_5', 'Cortisol balans')); ?></span>
        <span class="phase-tag"><?php echo htmlspecialchars(t('method.phase_tag_6', 'Beweging op maat')); ?></span>
      </div>
    </div>
    <div class="method-phase">
      <div class="phase-num"><?php echo htmlspecialchars(t('method.phase_num_3', '03')); ?></div>
      <div class="phase-name"><?php echo htmlspecialchars(t('method.phase_name_3', 'Mindset')); ?></div>
      <div class="phase-days"><?php echo htmlspecialchars(t('method.phase_days_3', 'Gedragsverandering die beklijft')); ?></div>
      <p class="phase-desc"><?php echo htmlspecialchars(t('method.phase_desc_3', 'Terugval is geen mislukking, het is data. We werken aan de onderliggende patronen zodat nieuwe gewoontes niet wegglijden zodra het leven drukker wordt.')); ?></p>
      <div class="phase-tags">
        <span class="phase-tag"><?php echo htmlspecialchars(t('method.phase_tag_7', 'Kaizen principes')); ?></span>
        <span class="phase-tag"><?php echo htmlspecialchars(t('method.phase_tag_8', 'Kleine stappen')); ?></span>
        <span class="phase-tag"><?php echo htmlspecialchars(t('method.phase_tag_9', 'Zelfregie')); ?></span>
      </div>
    </div>
    <div class="method-phase">
      <div class="phase-num"><?php echo t('method.phase_num_4', '✦'); ?></div>
      <div class="phase-name"><?php echo htmlspecialchars(t('method.phase_name_4', 'Cyclus-bewust')); ?></div>
      <div class="phase-days"><?php echo htmlspecialchars(t('method.phase_days_4', 'Onderdeel van het programma')); ?></div>
      <p class="phase-desc"><?php echo htmlspecialchars(t('method.phase_desc_4', 'Als vrouw heeft jouw lichaam een cyclisch ritme dat invloed heeft op energie, voeding en herstel. In het programma leer je dit herkennen en ermee werken.')); ?></p>
      <div class="phase-tags">
        <span class="phase-tag"><?php echo htmlspecialchars(t('method.phase_tag_10', 'Leeromgeving')); ?></span>
        <span class="phase-tag"><?php echo htmlspecialchars(t('method.phase_tag_11', 'Cyclus inzicht')); ?></span>
        <span class="phase-tag"><?php echo htmlspecialchars(t('method.phase_tag_12', 'Optioneel verdiepen')); ?></span>
      </div>
    </div>
  </div>
</section>

<!-- PILLARS -->
<section class="pillars">
  <div class="pillars-header">
    <span class="section-eyebrow"><?php echo htmlspecialchars(t('pillars.section_eyebrow', 'Wat je leert')); ?></span>
    <h2><?php echo htmlspecialchars(t('pillars.h2_heading', 'De basis die alles in beweging zet')); ?></h2>
    <p class="body-text"><?php echo htmlspecialchars(t('pillars.body_text', 'Gezonde gewoontes rondom voeding, slaap en beweging herstellen je darmgezondheid. Een gezonde darm zorgt ervoor dat je hormonen makkelijker in balans komen.')); ?></p>
  </div>
  <div class="pillars-grid">
    <div class="pillar-card p1">
      <span class="pillar-icon-lg"><?php echo t('pillars.pillar_icon_lg', '🥗'); ?></span>
      <h3><?php echo htmlspecialchars(t('pillars.h3_heading', 'Voeding die werkt voor jou')); ?></h3>
      <p><?php echo htmlspecialchars(t('pillars.p_paragraph', 'Niet tellen, niet verbieden, maar begrijpen. De juiste voeding voedt je darmbacteriën, vermindert ontstekingen en geeft je lichaam de bouwstenen om hormonen aan te maken.')); ?></p>
      <ul class="pillar-detail-list">
        <li><?php echo htmlspecialchars(t('pillars.li_list_item_1', 'Darmgezondheid als fundament')); ?></li>
        <li><?php echo htmlspecialchars(t('pillars.li_list_item_2', 'Anti-inflammatoire voeding eenvoudig toegepast')); ?></li>
        <li><?php echo htmlspecialchars(t('pillars.li_list_item_3', '32 voedingsmiddelen uitgelegd op werkzame stoffen')); ?></li>
        <li><?php echo htmlspecialchars(t('pillars.li_list_item_4', 'Recepten voor elke week van het programma')); ?></li>
      </ul>
    </div>
    <div class="pillar-card p2">
      <span class="pillar-icon-lg"><?php echo t('pillars.pillar_icon_lg_2', '😴'); ?></span>
      <h3><?php echo htmlspecialchars(t('pillars.h3_heading_2', 'Slaap, stress & herstel')); ?></h3>
      <p><?php echo htmlspecialchars(t('pillars.p_paragraph_2', 'Chronische stress verlaagt je geslachtshormonen direct. Goede slaap en stressmanagement zijn daarmee geen luxe, maar een hormonale interventie.')); ?></p>
      <ul class="pillar-detail-list">
        <li><?php echo htmlspecialchars(t('pillars.li_list_item_1_2', 'Slaaphygiëne protocol stap voor stap opgebouwd')); ?></li>
        <li><?php echo htmlspecialchars(t('pillars.li_list_item_2_2', 'Stressreductietechnieken passend bij jouw leven')); ?></li>
        <li><?php echo htmlspecialchars(t('pillars.li_list_item_3_2', 'Cortisolbalans via voeding en gewoontes')); ?></li>
        <li><?php echo htmlspecialchars(t('pillars.li_list_item_4_2', 'Avondrituelen die je energie \'s ochtends teruggeeft')); ?></li>
      </ul>
    </div>
    <div class="pillar-card p3">
      <span class="pillar-icon-lg"><?php echo t('pillars.pillar_icon_lg_3', '🪴'); ?></span>
      <h3><?php echo htmlspecialchars(t('pillars.h3_heading_3', 'Kaizen: verandering zonder terugval')); ?></h3>
      <p><?php echo htmlspecialchars(t('pillars.p_paragraph_3', 'Eén kleine verbetering per week. Zo klein dat het bijna belachelijk simpel voelt, en precies daardoor beklijft het.')); ?></p>
      <ul class="pillar-detail-list">
        <li><?php echo htmlspecialchars(t('pillars.li_list_item_1_3', '6-maanden framework met duidelijke fases')); ?></li>
        <li><?php echo htmlspecialchars(t('pillars.li_list_item_2_3', 'Terugval als data, niet als mislukking')); ?></li>
        <li><?php echo htmlspecialchars(t('pillars.li_list_item_3_3', 'Cyclus-inzicht als extra laag in de leeromgeving')); ?></li>
        <li><?php echo htmlspecialchars(t('pillars.li_list_item_4_3', 'Jij wordt onafhankelijk van coaching')); ?></li>
      </ul>
    </div>
  </div>
</section>

<!-- CONNECTION -->
<section class="connection">
  <div class="connection-grid">
    <div>
      <span class="section-eyebrow"><?php echo htmlspecialchars(t('connection.section_eyebrow', 'De connectie die alles verandert')); ?></span>
      <h2><?php echo t('connection.h2_heading', 'Gezonde gewoontes brengen je <em>hormonen</em> vanzelf in balans'); ?></h2>
      <p class="body-text"><?php echo htmlspecialchars(t('connection.body_text', 'Voeding, beweging, slaap en stress bepalen de gezondheid van je darmen. En je darmen bepalen vervolgens hoe jouw hormonen worden aangemaakt, afgebroken en gereguleerd.')); ?></p>
      <p class="body-text"><?php echo htmlspecialchars(t('connection.body_text_2', 'Dat betekent dat we niet direct aan hormonen hoeven te sleutelen. Door de basis te herstellen vallen de hormonen vanzelf op hun plek. Stap voor stap, zonder drastische ingrepen.')); ?></p>
      <div class="quote-highlight">
        <p><?php echo htmlspecialchars(t('connection.p_paragraph', '"Een gezonde darm is een gezond hormoon. En een gezond hormoon is een vrouw die zich weer zichzelf voelt."')); ?></p>
      </div>
    </div>
    <div style="display: flex; flex-direction: column; gap: 16px;">
      <div class="connection-card">
        <span class="connection-icon"><?php echo t('connection.connection_icon', '🥦'); ?></span>
        <div>
          <strong><?php echo htmlspecialchars(t('connection.strong_text', 'Voeding voedt je darmbacteriën')); ?></strong>
          <span><?php echo htmlspecialchars(t('connection.span_text', 'Vezels, fermentatie en anti-inflammatoire voeding bouwen een microbioom dat hormonen reguleert')); ?></span>
        </div>
      </div>
      <div class="connection-card">
        <span class="connection-icon"><?php echo t('connection.connection_icon_2', '😴'); ?></span>
        <div>
          <strong><?php echo htmlspecialchars(t('connection.strong_text_2', 'Slaap en stress reguleren cortisol')); ?></strong>
          <span><?php echo htmlspecialchars(t('connection.span_text_2', 'Chronische stress verlaagt progesteron en oestrogeen. Goede slaap geeft je hormonen de ruimte')); ?></span>
        </div>
      </div>
      <div class="connection-card">
        <span class="connection-icon"><?php echo t('connection.connection_icon_3', '🏃‍♀️'); ?></span>
        <div>
          <strong><?php echo htmlspecialchars(t('connection.strong_text_3', 'Beweging ondersteunt insulinegevoeligheid')); ?></strong>
          <span><?php echo htmlspecialchars(t('connection.span_text_3', 'De juiste beweging op het juiste moment stabiliseert bloedsuiker')); ?></span>
        </div>
      </div>
      <div class="connection-card highlight">
        <span class="connection-icon"><?php echo t('connection.connection_icon_4', '⚖️'); ?></span>
        <div>
          <strong><?php echo htmlspecialchars(t('connection.strong_text_4', 'Het resultaat: hormonen in balans')); ?></strong>
          <span><?php echo htmlspecialchars(t('connection.span_text_4', 'Meer energie, stabielere stemming, betere slaap, minder klachten rondom je cyclus')); ?></span>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="section-divider"></div>

<!-- FOR WHO -->
<section class="offer" id="aanbod">
  <div class="offer-header">
    <span class="section-eyebrow"><?php echo htmlspecialchars(t('offer.section_eyebrow', 'Voor wie is dit')); ?></span>
    <h2><?php echo t('offer.h2_heading', 'Dit is voor jou als je <em>herkent</em><br>wat hier staat'); ?></h2>
    <p class="body-text"><?php echo htmlspecialchars(t('offer.body_text', 'Coaching werkt alleen als de klik er is. Lees hieronder of dit bij jou past.')); ?></p>
  </div>

  <div class="for-who-grid">
    <div class="for-who-card">
      <span class="for-who-icon"><?php echo t('offer.for_who_icon', '🪞'); ?></span>
      <p><?php echo htmlspecialchars(t('offer.p_paragraph', 'Je herkent jezelf in vermoeidheid, energiedips of een onrustig gevoel, maar medisch is er niets aan de hand.')); ?></p>
    </div>
    <div class="for-who-card">
      <span class="for-who-icon"><?php echo t('offer.for_who_icon_2', '🔁'); ?></span>
      <p><?php echo htmlspecialchars(t('offer.p_paragraph_2', 'Je hebt al van alles geprobeerd. Diëten, supplementen, meer sporten. Het werkt even en dan glijdt het weg.')); ?></p>
    </div>
    <div class="for-who-card">
      <span class="for-who-icon"><?php echo t('offer.for_who_icon_3', '🧠'); ?></span>
      <p><?php echo htmlspecialchars(t('offer.p_paragraph_3', 'Je wil begrijpen wat er in je lichaam gebeurt. Niet zomaar een lijstje volgen, maar snappen waarom.')); ?></p>
    </div>
    <div class="for-who-card">
      <span class="for-who-icon"><?php echo t('offer.for_who_icon_4', '📆'); ?></span>
      <p><?php echo htmlspecialchars(t('offer.p_paragraph_4', 'Je leven is druk en je hebt geen tijd voor ingewikkelde schema\'s. Je wil concrete, kleine stappen.')); ?></p>
    </div>
    <div class="for-who-card">
      <span class="for-who-icon"><?php echo t('offer.for_who_icon_5', '💛'); ?></span>
      <p><?php echo htmlspecialchars(t('offer.p_paragraph_5', 'Je voelt dat je stemmingswisselingen, slaap en energie samenhangen, maar niemand heeft je verteld hoe.')); ?></p>
    </div>
    <div class="for-who-card">
      <span class="for-who-icon"><?php echo t('offer.for_who_icon_6', '🌱'); ?></span>
      <p><?php echo htmlspecialchars(t('offer.p_paragraph_6', 'Je bent klaar om echt te investeren in jezelf. Niet in een snel trucje, maar in een duurzame aanpak.')); ?></p>
    </div>
  </div>

  <div class="not-for-who">
    <p><strong><?php echo htmlspecialchars(t('offer.strong_text', 'Dit is niet voor je als')); ?></strong> <?php echo htmlspecialchars(t('offer.p_paragraph_7', 'je op zoek bent naar een crashdieet, een weekschema met grammen en verboden producten, of een snelle oplossing voor een specifiek getal op de weegschaal.')); ?></p>
  </div>

  <!-- What's included -->
  <div class="includes-block">
    <div class="includes-header">
      <span class="section-eyebrow"><?php echo htmlspecialchars(t('offer.section_eyebrow_2', 'Wat je krijgt bij persoonlijke begeleiding')); ?></span>
      <h3><?php echo htmlspecialchars(t('offer.h3_heading', 'Alles wat je nodig hebt, op één plek')); ?></h3>
    </div>
    <div class="includes-grid">
      <div class="include-item">
        <span class="include-icon"><?php echo t('offer.include_icon', '📱'); ?></span>
        <div>
          <strong><?php echo htmlspecialchars(t('offer.strong_text_2', 'Alles-in-één coaching app')); ?></strong>
          <span><?php echo htmlspecialchars(t('offer.span_text', '2000+ recepten, trainingen loggen, check-ins, voortgang bijhouden en berichten.')); ?></span>
        </div>
      </div>
      <div class="include-item">
        <span class="include-icon"><?php echo t('offer.include_icon_2', '💬'); ?></span>
        <div>
          <strong><?php echo htmlspecialchars(t('offer.strong_text_3', 'WhatsApp begeleiding en accountability')); ?></strong>
          <span><?php echo htmlspecialchars(t('offer.span_text_2', 'Directe lijn met Rutger én wekelijkse accountability check')); ?></span>
        </div>
      </div>
      <div class="include-item">
        <span class="include-icon"><?php echo t('offer.include_icon_3', '📋'); ?></span>
        <div>
          <strong><?php echo htmlspecialchars(t('offer.strong_text_4', 'Persoonlijk voedings- & leefstijlplan')); ?></strong>
          <span><?php echo htmlspecialchars(t('offer.span_text_3', 'Niet generiek, maar gemaakt op basis van jouw intake en doelen')); ?></span>
        </div>
      </div>
      <div class="include-item">
        <span class="include-icon"><?php echo t('offer.include_icon_4', '🎓'); ?></span>
        <div>
          <strong><?php echo htmlspecialchars(t('offer.strong_text_5', 'Volledige leeromgeving')); ?></strong>
          <span><?php echo htmlspecialchars(t('offer.span_text_4', 'Gidsen, protocollen, cyclus-module, supplement info. Alles onderbouwd.')); ?></span>
        </div>
      </div>
      <div class="include-item">
        <span class="include-icon"><?php echo t('offer.include_icon_5', '📞'); ?></span>
        <div>
          <strong><?php echo htmlspecialchars(t('offer.strong_text_6', 'Videocalls (elke 2-4 weken)')); ?></strong>
          <span><?php echo htmlspecialchars(t('offer.span_text_5', 'Diepgaande gesprekken over voortgang, obstakels en volgende stappen')); ?></span>
        </div>
      </div>
      <div class="include-item">
        <span class="include-icon"><?php echo t('offer.include_icon_6', '🔄'); ?></span>
        <div>
          <strong><?php echo htmlspecialchars(t('offer.strong_text_7', 'Wekelijkse check-ins en bijsturing')); ?></strong>
          <span><?php echo htmlspecialchars(t('offer.span_text_6', 'Geen maand wachten op feedback. Elke week kijken we wat werkt')); ?></span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ABOUT -->
<section class="about" id="over-mij">
  <div class="about-visual">
    <div class="about-img-placeholder">
      <img src="/assets/img/photo_rutger_orange02.png" alt="<?php echo htmlspecialchars(t('about.img_alt', 'Rutger van den Ende')); ?>">
      <div class="about-name-card">
        <div class="about-name"><?php echo htmlspecialchars(t('about.about_name', 'Rutger van den Ende')); ?></div>
        <div class="about-title-card"><?php echo htmlspecialchars(t('about.about_title_card', 'Online Health Coach')); ?></div>
      </div>
    </div>
    <div class="about-cert">
      <span class="about-cert-icon"><?php echo t('about.about_cert_icon', '🎓'); ?></span>
      <?php echo htmlspecialchars(t('about.about_cert_text', 'Gecertificeerd Health Coach')); ?>
    </div>
  </div>
  <div class="about-right">
    <span class="section-eyebrow"><?php echo htmlspecialchars(t('about.section_eyebrow', 'Over mij')); ?></span>
    <h2><?php echo t('about.h2_heading', 'Ik coach vanuit <em>kennis</em>, niet vanuit dogma'); ?></h2>
    <p class="about-story"><?php echo htmlspecialchars(t('about.about_story', 'Ik ben Rutger, online health coach gespecialiseerd in vrouwengezondheid. Mijn aanpak combineert wetenschappelijke kennis over voeding, hormonen en gedragsverandering met de Kaizen-filosofie: kleine, haalbare stappen die blijvende resultaten opleveren.')); ?></p>
    <p class="about-story"><?php echo htmlspecialchars(t('about.about_story_2', 'Ik geloof niet in one-size-fits-all oplossingen. Elk lichaam is anders, elke levensfase vraagt om een andere aanpak. Daarom werk ik met een persoonlijk programma dat meebeweegt met jouw leven.')); ?></p>
    <div class="about-values">
      <div class="value-item">
        <span class="value-icon"><?php echo t('about.value_icon', '🔬'); ?></span>
        <div class="value-title"><?php echo htmlspecialchars(t('about.value_title', 'Evidence-based')); ?></div>
        <div class="value-desc"><?php echo htmlspecialchars(t('about.value_desc', 'Onderbouwd met wetenschap, niet met trends')); ?></div>
      </div>
      <div class="value-item">
        <span class="value-icon"><?php echo t('about.value_icon_2', '🌿'); ?></span>
        <div class="value-title"><?php echo htmlspecialchars(t('about.value_title_2', 'Kaizen methode')); ?></div>
        <div class="value-desc"><?php echo htmlspecialchars(t('about.value_desc_2', 'Kleine stappen, grote resultaten')); ?></div>
      </div>
      <div class="value-item">
        <span class="value-icon"><?php echo t('about.value_icon_3', '💬'); ?></span>
        <div class="value-title"><?php echo htmlspecialchars(t('about.value_title_3', 'Persoonlijk contact')); ?></div>
        <div class="value-desc"><?php echo htmlspecialchars(t('about.value_desc_3', 'Geen chatbot, altijd ik')); ?></div>
      </div>
      <div class="value-item">
        <span class="value-icon"><?php echo t('about.value_icon_4', '🔄'); ?></span>
        <div class="value-title"><?php echo htmlspecialchars(t('about.value_title_4', 'Flexibele aanpak')); ?></div>
        <div class="value-desc"><?php echo htmlspecialchars(t('about.value_desc_4', 'Meebeweegt met jouw leven')); ?></div>
      </div>
    </div>
  </div>
</section>

<!-- SOCIAL PROOF -->
<section class="social-proof" id="reviews">
  <div class="method-header">
    <span class="section-eyebrow"><?php echo htmlspecialchars(t('social_proof.section_eyebrow', 'Resultaten')); ?></span>
    <h2><?php echo htmlspecialchars(t('social_proof.h2_heading', 'Wat cliënten ervaren')); ?></h2>
  </div>
  
  <!-- Video Testimonial -->
  <div class="video-testimonial-wrapper">
    <div class="video-testimonial-card" id="videoCard">
      <img src="/assets/img/semra_poster.jpg" alt="<?php echo htmlspecialchars(t('social_proof.video_poster', 'Semra')); ?>" class="video-poster" id="videoPoster">
      <video id="testimonialVideo" muted loop playsinline preload="auto">
        <source src="/assets/video/semra_testimonial_compressed.mp4" type="video/mp4">
      </video>
      <div class="video-overlay" id="videoOverlay">
        <div class="video-play-btn"><?php echo t('social_proof.video_play_btn', '▶'); ?></div>
        <div class="video-info">
          <span class="video-badge"><?php echo htmlspecialchars(t('social_proof.video_badge', 'Video testimonial')); ?></span>
          <h3 class="video-title"><?php echo htmlspecialchars(t('social_proof.video_title', 'Semra over haar ervaring')); ?></h3>
          <p class="video-subtitle"><?php echo htmlspecialchars(t('social_proof.video_subtitle', 'Klik om te bekijken met geluid')); ?></p>
        </div>
      </div>
    </div>
  
  <div class="reviews-grid">
    <div class="review-card">
      <div class="review-stars"><?php echo t('social_proof.review_stars', '⭐⭐⭐⭐⭐'); ?></div>
      <p class="review-text"><?php echo htmlspecialchars(t('social_proof.review_text', '"Na jaren van diëten en frustratie heb ik eindelijk geleerd om naar mijn lichaam te luisteren. De Kaizen-aanpak werkt echt. Kleine stappen, maar ik voel me beter dan ooit."')); ?></p>
      <div class="reviewer">
        <div class="reviewer-avatar"><?php echo htmlspecialchars(t('social_proof.reviewer_avatar', 'L')); ?></div>
        <div class="reviewer-info">
          <div class="reviewer-name"><?php echo htmlspecialchars(t('social_proof.reviewer_name', 'Linda')); ?></div>
          <div class="reviewer-detail"><?php echo htmlspecialchars(t('social_proof.reviewer_detail', '38 jaar · 6 maanden traject')); ?></div>
        </div>
      </div>
    </div>
    <div class="review-card">
      <div class="review-stars"><?php echo t('social_proof.review_stars', '⭐⭐⭐⭐⭐'); ?></div>
      <p class="review-text"><?php echo htmlspecialchars(t('social_proof.review_text_2', '"Rutger legt alles zo helder uit. Voor het eerst begrijp ik waarom mijn energie zo schommelde. De combinatie van voeding en cyclusbewustzijn heeft alles veranderd."')); ?></p>
      <div class="reviewer">
        <div class="reviewer-avatar"><?php echo htmlspecialchars(t('social_proof.reviewer_avatar_2', 'M')); ?></div>
        <div class="reviewer-info">
          <div class="reviewer-name"><?php echo htmlspecialchars(t('social_proof.reviewer_name_2', 'Marieke')); ?></div>
          <div class="reviewer-detail"><?php echo htmlspecialchars(t('social_proof.reviewer_detail_2', '31 jaar · 6 maanden traject')); ?></div>
        </div>
      </div>
    </div>
    <div class="review-card">
      <div class="review-stars"><?php echo t('social_proof.review_stars', '⭐⭐⭐⭐⭐'); ?></div>
      <p class="review-text"><?php echo htmlspecialchars(t('social_proof.review_text_3', '"Geen strenge regels, geen schuldgevoel. Gewoon een aanpak die past bij mijn drukke leven als moeder. De wekelijkse check-ins houden me op koers."')); ?></p>
      <div class="reviewer">
        <div class="reviewer-avatar"><?php echo htmlspecialchars(t('social_proof.reviewer_avatar_3', 'S')); ?></div>
        <div class="reviewer-info">
          <div class="reviewer-name"><?php echo htmlspecialchars(t('social_proof.reviewer_name_3', 'Sophie')); ?></div>
          <div class="reviewer-detail"><?php echo htmlspecialchars(t('social_proof.reviewer_detail_3', '35 jaar · 6 maanden traject')); ?></div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- ============================================================
       BEFORE/AFTER SECTIE - MOMENTEEL VERBORGEN
       
       Om deze sectie ZICHTBAAR te maken:
       1. Verwijder "display: none;" uit de style tag hieronder
       2. Vul de foto URLs in bij src="..."
       3. Pas de namen, leeftijden en quotes aan
       
       Om deze sectie VERBORGEN te houden:
       Laat alles zoals het is (style="display: none;")
       ============================================================ -->
  <div class="before-after-section" style="display: none;">
    <div class="before-after-header">
      <span class="section-eyebrow"><?php echo htmlspecialchars(t('before_after.section_eyebrow', 'Transformaties')); ?></span>
      <h3><?php echo htmlspecialchars(t('before_after.h3_heading', 'Voor & Na')); ?></h3>
    </div>
    <div class="before-after-grid">
      
      <!-- VOOR/NA ITEM 1 -->
      <div class="before-after-card">
        <div class="before-after-images">
          <div class="ba-image before">
            <img src="" alt="<?php echo htmlspecialchars(t('before_after.img_alt_before', 'Voor foto')); ?>">
            <span class="ba-label"><?php echo htmlspecialchars(t('before_after.label_before', 'Voor')); ?></span>
          </div>
          <div class="ba-image after">
            <img src="" alt="<?php echo htmlspecialchars(t('before_after.img_alt_after', 'Na foto')); ?>">
            <span class="ba-label"><?php echo htmlspecialchars(t('before_after.label_after', 'Na')); ?></span>
          </div>
        </div>
        <div class="ba-info">
          <div class="ba-name"><?php echo htmlspecialchars(t('before_after.ba_name_1', 'Naam, XX jaar')); ?></div>
          <div class="ba-duration"><?php echo htmlspecialchars(t('before_after.ba_duration_1', 'X maanden traject')); ?></div>
          <p class="ba-quote"><?php echo htmlspecialchars(t('before_after.ba_quote_1', '"Vul hier de quote van de klant in over haar transformatie."')); ?></p>
        </div>
      </div>
      
      <!-- VOOR/NA ITEM 2 -->
      <div class="before-after-card">
        <div class="before-after-images">
          <div class="ba-image before">
            <img src="" alt="<?php echo htmlspecialchars(t('before_after.img_alt_before', 'Voor foto')); ?>">
            <span class="ba-label"><?php echo htmlspecialchars(t('before_after.label_before', 'Voor')); ?></span>
          </div>
          <div class="ba-image after">
            <img src="" alt="<?php echo htmlspecialchars(t('before_after.img_alt_after', 'Na foto')); ?>">
            <span class="ba-label"><?php echo htmlspecialchars(t('before_after.label_after', 'Na')); ?></span>
          </div>
        </div>
        <div class="ba-info">
          <div class="ba-name"><?php echo htmlspecialchars(t('before_after.ba_name_2', 'Naam, XX jaar')); ?></div>
          <div class="ba-duration"><?php echo htmlspecialchars(t('before_after.ba_duration_2', 'X maanden traject')); ?></div>
          <p class="ba-quote"><?php echo htmlspecialchars(t('before_after.ba_quote_2', '"Vul hier de quote van de klant in over haar transformatie."')); ?></p>
        </div>
      </div>
      
    </div>
  </div>
  <!-- EINDE BEFORE/AFTER SECTIE -->
  
</section>

<!-- FAQ -->
<section class="faq">
  <div class="faq-header">
    <span class="section-eyebrow"><?php echo htmlspecialchars(t('faq.section_eyebrow', 'Veelgestelde vragen')); ?></span>
    <h2><?php echo htmlspecialchars(t('faq.h2_heading', 'Nog vragen?')); ?></h2>
  </div>
  <div class="faq-list">
    <div class="faq-item">
      <button class="faq-question">
        <h4><?php echo htmlspecialchars(t('faq.faq_question', 'Hoe lang duurt het traject?')); ?></h4>
        <span class="faq-icon">+</span>
      </button>
      <div class="faq-answer">
        <p><?php echo htmlspecialchars(t('faq.p_paragraph', 'Het standaard traject duurt 6 maanden. Dit is de tijd die nodig is om echte, blijvende verandering te realiseren. De Kaizen-methode werkt met kleine stappen die tijd nodig hebben om te beklijven.')); ?></p>
      </div>
    </div>
    <div class="faq-item">
      <button class="faq-question">
        <h4><?php echo htmlspecialchars(t('faq.faq_question_2', 'Moet ik een streng dieet volgen?')); ?></h4>
        <span class="faq-icon">+</span>
      </button>
      <div class="faq-answer">
        <p><?php echo htmlspecialchars(t('faq.p_paragraph_2', 'Nee, absoluut niet. Ik geloof niet in restrictieve diëten. We werken met voeding die jouw lichaam ondersteunt, zonder lijstjes met verboden producten. Het gaat om begrijpen, niet om beperken.')); ?></p>
      </div>
    </div>
    <div class="faq-item">
      <button class="faq-question">
        <h4><?php echo htmlspecialchars(t('faq.faq_question_3', 'Hoeveel tijd kost het per week?')); ?></h4>
        <span class="faq-icon">+</span>
      </button>
      <div class="faq-answer">
        <p><?php echo htmlspecialchars(t('faq.p_paragraph_3', 'De tijdsinvestering is bewust laag gehouden. Reken op 1-2 uur per week voor de leeromgeving en check-ins. De veranderingen die we doorvoeren zijn klein en passen in je bestaande routine.')); ?></p>
      </div>
    </div>
    <div class="faq-item">
      <button class="faq-question">
        <h4><?php echo htmlspecialchars(t('faq.faq_question_4', 'Wat als ik terugval in oude gewoontes?')); ?></h4>
        <span class="faq-icon">+</span>
      </button>
      <div class="faq-answer">
        <p><?php echo htmlspecialchars(t('faq.p_paragraph_4', 'Terugval hoort erbij en is geen mislukking. Het is waardevolle data. We analyseren wat er gebeurde en passen de aanpak aan. De Kaizen-methode is juist ontworpen om terugval te minimaliseren door kleine, haalbare stappen.')); ?></p>
      </div>
    </div>
    <div class="faq-item">
      <button class="faq-question">
        <h4><?php echo htmlspecialchars(t('faq.faq_question_5', 'Is dit geschikt voor mij als ik al medische begeleiding heb?')); ?></h4>
        <span class="faq-icon">+</span>
      </button>
      <div class="faq-answer">
        <p><?php echo htmlspecialchars(t('faq.p_paragraph_5', 'Health coaching is een aanvulling op medische zorg, geen vervanging. Als je onder behandeling bent, werk ik graag samen met je behandelaar. Tijdens het kennismakingsgesprek bespreken we of coaching op dit moment passend is.')); ?></p>
      </div>
    </div>
  </div>
</section>

<!-- INTAKE FORM -->
<section class="intake-section" id="kennismaking">
  <div class="intake-bg"></div>
  <div class="intake-inner">
    <div class="intake-left">
      <h2><?php echo t('intake.h2_heading', 'Klaar voor de<br>volgende stap?'); ?></h2>
      <p><?php echo htmlspecialchars(t('intake.p_paragraph', 'Plan een gratis en vrijblijvend kennismakingsgesprek. We bespreken waar je nu staat, wat je doelen zijn en of mijn aanpak bij je past. Geen verkooppraatje, gewoon een eerlijk gesprek.')); ?></p>
      <div class="intake-promise">
        <div class="promise-item">
          <span class="promise-dot"></span>
          <span><?php echo htmlspecialchars(t('intake.promise_1', 'Gratis en vrijblijvend')); ?></span>
        </div>
        <div class="promise-item">
          <span class="promise-dot"></span>
          <span><?php echo htmlspecialchars(t('intake.promise_2', '30 minuten videocall')); ?></span>
        </div>
        <div class="promise-item">
          <span class="promise-dot"></span>
          <span><?php echo htmlspecialchars(t('intake.promise_3', 'Binnen 48 uur reactie')); ?></span>
        </div>
      </div>
    </div>
    <div class="intake-form-card">
      <?php
      $success = isset($_GET['success']) && $_GET['success'] === '1';
      $error = isset($_GET['error']) ? urldecode($_GET['error']) : '';
      $api_key = '3b1f7c9e5a2d4f8c6e1b9a7d3c5f2e8a6d4b1c9f7e3a5d2c8b6f1a9e4c7d3b5f';
      ?>

      <?php if ($success): ?>
        <div class="form-success">
          <div class="form-success-icon">✅</div>
          <h3><?php echo htmlspecialchars(t('intake.success_title', 'Bedankt voor je aanmelding!')); ?></h3>
          <p><?php echo htmlspecialchars(t('intake.success_message', 'Ik neem binnen 48 uur contact met je op om een kennismakingsgesprek in te plannen.')); ?></p>
        </div>
      <?php else: ?>
        <?php if ($error): ?>
          <div style="background: #fdf5f0; border: 1px solid #f0d8cc; padding: 12px 16px; border-radius: 8px; margin-bottom: 18px; font-size: 0.9rem; color: var(--terracotta-dark);">
            <?php echo htmlspecialchars($error); ?>
          </div>
        <?php endif; ?>

        <form id="intake-form" method="POST" action="/api/submit-form.php">
          <input type="hidden" name="api_key" value="<?php echo htmlspecialchars($api_key); ?>">

          <div class="form-title"><?php echo htmlspecialchars(t('intake.form_title', 'Plan een kennismaking')); ?></div>
          <div class="form-sub"><?php echo htmlspecialchars(t('intake.form_sub', 'Vul onderstaand formulier in en ik neem binnen 48 uur contact met je op.')); ?></div>

          <div class="form-group">
            <label class="form-label" for="naam"><?php echo htmlspecialchars(t('intake.label_naam', 'Naam')); ?> *</label>
            <input type="text" id="naam" name="naam" class="form-input" placeholder="<?php echo htmlspecialchars(t('intake.placeholder_naam', 'Jouw voornaam')); ?>" required value="<?php echo htmlspecialchars($_POST['naam'] ?? ''); ?>">
          </div>

          <div class="form-group">
            <label class="form-label" for="email"><?php echo htmlspecialchars(t('intake.label_email', 'E-mailadres')); ?> *</label>
            <input type="email" id="email" name="email" class="form-input" placeholder="<?php echo htmlspecialchars(t('intake.placeholder_email', 'jouw@email.nl')); ?>" required value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
          </div>

          <div class="form-group">
            <label class="form-label" for="telefoon"><?php echo htmlspecialchars(t('intake.label_telefoon', 'Telefoonnummer')); ?></label>
            <input type="tel" id="telefoon" name="telefoon" class="form-input" placeholder="<?php echo htmlspecialchars(t('intake.placeholder_telefoon', '+31 6 12345678')); ?>" value="<?php echo htmlspecialchars($_POST['telefoon'] ?? ''); ?>">
          </div>

          <div class="form-group">
            <label class="form-label" for="bericht"><?php echo htmlspecialchars(t('intake.label_bericht', 'Waar wil je aan werken?')); ?></label>
            <textarea id="bericht" name="bericht" class="form-textarea" placeholder="<?php echo htmlspecialchars(t('intake.placeholder_bericht', 'Vertel me kort wat er speelt...')); ?>"><?php echo htmlspecialchars($_POST['bericht'] ?? ''); ?></textarea>
          </div>

          <button type="submit" class="form-submit"><?php echo htmlspecialchars(t('intake.submit_button', 'Verstuur aanvraag')); ?></button>
          <p class="form-disclaimer"><?php echo htmlspecialchars(t('intake.disclaimer', 'Door te versturen ga je akkoord met de privacyvoorwaarden. Je gegevens worden nooit gedeeld met derden.')); ?></p>
        </form>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php include 'partials/footer.php'; ?>

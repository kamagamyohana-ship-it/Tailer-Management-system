<?php
$page_title = 'Quiz';
$active = 'user';
include 'includes/header.php';

$questions = [
    ['prompt' => 'Kazi kuu ya presser foot ni nini?', 'options' => ['Kuelekeza kitambaa chini ya sindano' => true, 'Kukata kitambaa' => false, 'Kuhifadhi nyuzi' => false]],
    ['prompt' => 'Kwa nini unatumia measuring tape wakati wa kufuma?', 'options' => ['Kwa kupima ukubwa wa kitambaa vizuri' => true, 'Kwa kuchorea picha tu' => false, 'Kwa kuunganisha vipande vya chuma' => false]],
    ['prompt' => 'Nini jukumu la bobbin kwenye mashine ya kushona?', 'options' => ['Kubeba nyuzi ya chini ili kutengeneza mshono' => true, 'Kufunga kitambaa kwa karatasi' => false, 'Kusafisha mashine tu' => false]],
    ['prompt' => 'Ni hatua gani muhimu kabla ya kuanza kushona?', 'options' => ['Kusakinisha sindano na kuweka nyuzi sawasawa' => true, 'Kukata mashine kabisa' => false, 'Kusafisha chumba tu' => false]],
    ['prompt' => 'Je, sindano ya ukubwa mdogo hutumiwa kwa nini?', 'options' => ['Kwa kitambaa laini na nyembamba' => true, 'Kwa kitambaa nzito sana' => false, 'Kwa kufuma paa tu' => false]],
    ['prompt' => 'Nini maana ya seam allowance?', 'options' => ['Umbali wa nyuzi kutoka ukingo wa kipande hadi mshono' => true, 'Kipimo cha urefu wa sindano' => false, 'Aina ya kitambaa' => false]],
    ['prompt' => 'Kwa nini ni muhimu kupima kitambaa kabla ya kukata?', 'options' => ['Ili kupata kipimo sahihi na kuzuia kupoteza nyenzo' => true, 'Ili kuondoa nyuzi zote' => false, 'Ili kurahisisha kuweka mashine kwenye chumba' => false]],
    ['prompt' => 'Ni aina gani ya mshono hutumiwa kwa kuimarisha makali ya nguo?', 'options' => ['Backstitch' => true, 'Chain stitch tu' => false, 'Running stitch pekee' => false]],
    ['prompt' => 'Kwa nini unapaswa kufuta nyuzi zilizobaki baada ya kushona?', 'options' => ['Ili nguo ionekane safi na mshono uwe mzuri' => true, 'Ili kuzuia mashine kuanza tena' => false, 'Ili kufanya kitambaa kuwa kigumu' => false]],
    ['prompt' => 'Je, ironing ni muhimu kwa sababu gani?', 'options' => ['Huleta usafi wa mshono na kuongoza umbo la nguo' => true, 'Huongeza uzito wa kitambaa' => false, 'Huondoa nyuzi zote' => false]],
    ['prompt' => 'Nini maana ya dart katika muundo wa nguo?', 'options' => ['Mshono unaofanya nguo iwe na umbo la kupunguza upana' => true, 'Kipande cha kitambaa cha kulia' => false, 'Mbinu ya kuweka vifungo' => false]],
    ['prompt' => 'Ni jinsi gani ya kuzuia kitambaa kisichopeperuka wakati wa kushona?', 'options' => ['Kuweka pin na kuifuta vizuri kabla ya mshono' => true, 'Kukata kwa makali tu' => false, 'Kusimama kabisa' => false]],
    ['prompt' => 'Je, thread tension ni nini?', 'options' => ['Kiwango cha ukandamizaji wa nyuzi kwenye mashine' => true, 'Aina ya sindano' => false, 'Mara ya kushona kwa dakika' => false]],
    ['prompt' => 'Kwa nini ni muhimu kutumia nyuzi zinazolingana na kitambaa?', 'options' => ['Ili mshono uwe mzuri na usivunjike' => true, 'Ili kufanya kitambaa kisichobadilika' => false, 'Ili kupunguza kasi ya mashine' => false]],
    ['prompt' => 'Ni sehemu gani ya mashine huelekeza nyuzi ya juu?', 'options' => ['Take-up lever' => true, 'Feed dogs' => false, 'Needle plate' => false]],
    ['prompt' => 'Je, bobbin case hutumika kwa nini?', 'options' => ['Kuhifadhi bobbin na kusaidia mshono wa chini' => true, 'Kukata kitambaa' => false, 'Kufunga vifungo' => false]],
    ['prompt' => 'Kwanini ni muhimu kulainisha makali ya kitambaa kabla ya kushona?', 'options' => ['Ili kuzuia kuganda na kusaidia kuchora mstari vizuri' => true, 'Ili kubadili rangi ya kitambaa' => false, 'Ili kuongeza uzito wa nguo' => false]],
    ['prompt' => 'Ni nini hufanyika wakati presser foot inawekwa juu?', 'options' => ['Kitambaa hakiwezi kusogezwa na mashine' => true, 'Nyuzi huongezeka' => false, 'Sindano haina kazi' => false]],
    ['prompt' => 'Kwa nini unahitaji cutting mat?', 'options' => ['Ili kulinda meza na kukata kwa usahihi' => true, 'Ili kukausha kitambaa' => false, 'Ili kupima joto' => false]],
    ['prompt' => 'Je, rotary cutter ni chombo gani?', 'options' => ['Kikata chenye blade ya kuzunguka kwa usahihi' => true, 'Kijiko cha kupimia' => false, 'Mshono wa mkono' => false]],
    ['prompt' => 'Nini maana ya lining katika nguo?', 'options' => ['Tabaka la ndani linalosaidia kuunda sura na nguvu' => true, 'Rangi ya nje tu' => false, 'Aina ya doa la kitambaa' => false]],
    ['prompt' => 'Kwa nini unahitaji interfacing?', 'options' => ['Ili kufanya sehemu fulani za nguo kuwa imara zaidi' => true, 'Ili kupunguza uzito wa kitambaa' => false, 'Ili kukata nyuzi' => false]],
    ['prompt' => 'Ni nini tafsiri ya hem?', 'options' => ['Ukingo uliofichwa au uliofungwa vizuri' => true, 'Mshono wa kushoto tu' => false, 'Kipande cha pamba' => false]],
    ['prompt' => 'Ni hatua gani nzuri baada ya kumaliza mshono?', 'options' => ['Kufunika na kupiga chuma ili kuifanya iwe laini' => true, 'Kujaza na maji' => false, 'Kukata sindano odmah' => false]],
    ['prompt' => 'Kwa nini ni muhimu kupima tena baada ya kukata?', 'options' => ['Ili kuhakikisha vipande vinalingana kabla ya kushona' => true, 'Ili kubadili rangi' => false, 'Ili kutoa sindano' => false]],
    ['prompt' => 'Je, stitch length ni nini?', 'options' => ['Urefu wa kila mshono kwenye mashine' => true, 'Upana wa kitambaa' => false, 'Urefu wa sindano' => false]],
    ['prompt' => 'Ni aina ya nyuzi inayofaa kwa kitambaa cha satin?', 'options' => ['Nyuzi laini na nyembamba' => true, 'Nyuzi nene sana' => false, 'Nyuzi za ufungaji tu' => false]],
    ['prompt' => 'Kwa nini unapaswa kutumia safu ya thread guide?', 'options' => ['Ili nyuzi zielekee vizuri kupitia mashine' => true, 'Ili kupunguza nguvu ya hewa' => false, 'Ili kukata kitambaa' => false]],
    ['prompt' => 'Je, overlock stitch hutumika kwa nini?', 'options' => ['Kufunga na kuondoa makali ya kitambaa' => true, 'Kufanya mshono wa nyuma' => false, 'Kupima uzito wa kitambaa' => false]],
    ['prompt' => 'Ni nini hufanya seam ripper kuwa muhimu?', 'options' => ['Husaidia kufungua mshono bila kuharibu kitambaa' => true, 'Hukata kitambaa kikubwa' => false, 'Hupima urefu wa nguo' => false]],
    ['prompt' => 'Kwa nini unahitaji tailor chalk?', 'options' => ['Kuandika alama za muda juu ya kitambaa' => true, 'Kupiga rangi ya kubeba' => false, 'Kufunika kitambaa na maji' => false]],
    ['prompt' => 'Je, basting stitch ni nini?', 'options' => ['Mshono wa muda unaosaidia kuunganisha vipande' => true, 'Mshono wa mwisho tu' => false, 'Mshono wa kuitisha mashine' => false]],
    ['prompt' => 'Ni nini husaidia kupunguza mivutano wakati wa kushona?', 'options' => ['Kuweka nyuzi na sindano sahihi' => true, 'Kukata kitambaa mara nyingi' => false, 'Kutumia maji mengi' => false]],
    ['prompt' => 'Je, pattern markings ni nini?', 'options' => ['Alama zinazoonyesha sehemu za kukata na kushona' => true, 'Rangi ya nyuzi' => false, 'Namba za mchoro wa mashine' => false]],
    ['prompt' => 'Kwa nini ni muhimu kusafisha mashine baada ya matumizi?', 'options' => ['Ili kuondoa vipande vya kitambaa na nyuzi zilizobaki' => true, 'Ili kubadilisha rangi ya mashine' => false, 'Ili kupunguza sauti tu' => false]],
    ['prompt' => 'Je, zigzag stitch hutumika kwa nini?', 'options' => ['Kufunga makali na kushona laini' => true, 'Kukata mirija ya kitambaa' => false, 'Kupima kipimo cha mwili' => false]],
    ['prompt' => 'Nini maana ya bias cut?', 'options' => ['Kukata kitambaa kwa mwelekeo wa diagonal ili kuleta flexibility' => true, 'Kukata kwa mistari wima tu' => false, 'Kukata kwa pande zote' => false]],
    ['prompt' => 'Kwa nini unahitaji hem gauge?', 'options' => ['Kupima upana wa hem kwa usahihi' => true, 'Kukata pamba' => false, 'Kufunga vifungo' => false]],
    ['prompt' => 'Je, topstitching hujenga nini?', 'options' => ['Mshono wa nje unaoweka mstari na sura ya nguo' => true, 'Mfuko wa pamba' => false, 'Nyuzi za kutengeneza ndoano' => false]],
    ['prompt' => 'Ni nini muhimu kwa kuunda collar ya nguo?', 'options' => ['Kupima vizuri na kushona kwa usahihi' => true, 'Kupa visima vya maji' => false, 'Kualika watu wengi' => false]],
    ['prompt' => 'Kwanini unahitaji seam allowance ya 1.5 cm?', 'options' => ['Ili mshono uwe na nafasi ya kutosha' => true, 'Ili kusafisha kitambaa' => false, 'Ili kuongezea uzito' => false]],
    ['prompt' => 'Nini jukumu la feed dogs?', 'options' => ['Kusukuma kitambaa mbele wakati wa kushona' => true, 'Kufunga nyuzi kwenye bobbin' => false, 'Kupiga chuma' => false]],
    ['prompt' => 'Je, needle size 90/14 hutumika kwa nini?', 'options' => ['Kwa kitambaa kizito kama denim' => true, 'Kwa satin laini tu' => false, 'Kwa kitambaa cha pamba cha kawaida' => false]],
    ['prompt' => 'Kwa nini unapaswa kuangalia sindano kabla ya kila mradi?', 'options' => ['Ili isiwe bovu au iliyobeba' => true, 'Ili kupunguza umbali wa kitambaa' => false, 'Ili kuharibu mashine' => false]],
    ['prompt' => 'Je, warp thread ni nini?', 'options' => ['Nyuzi kwenda mbele ya kitambaa cha pamba' => true, 'Nyuzi ya bobbin tu' => false, 'Nyuzi ya ndani ya nguo' => false]],
    ['prompt' => 'Kwa nini unahitaji ruler wakati wa kukata?', 'options' => ['Ili kupima na kuwaweka mistari ya usahihi' => true, 'Ili kukata kwa nguvu' => false, 'Ili kuwasha mwanga' => false]],
    ['prompt' => 'Ni nini hufanya seam finish kuwa muhimu?', 'options' => ['Huondoa makali yanayovunja na huimarisha mshono' => true, 'Hubadilisha rangi ya nguo' => false, 'Hupunguza urefu wa sindano' => false]],
    ['prompt' => 'Je, muslin ni nini?', 'options' => ['Mfano wa awali wa kitambaa cha majaribio' => true, 'Aina ya pamba laini' => false, 'Nyuzi ya kushona ya nje' => false]],
    ['prompt' => 'Kwa nini unafaa kutumia pinning pins zilizokaa vizuri?', 'options' => ['Ili vipande visisogee wakati wa kushona' => true, 'Ili kukata nyuzi' => false, 'Ili kuongeza uzito' => false]],
    ['prompt' => 'Je, serger ni nini?', 'options' => ['Mashine inayoingiza na kufunga makali kwa haraka' => true, 'Sindano ya mkono' => false, 'Kipande cha chuma kilichopinda' => false]],
    ['prompt' => 'Nini maana ya gusset?', 'options' => ['Kipande cha kitambaa kinachoongeza nafasi ya harakati' => true, 'Kipande cha pamba tu' => false, 'Aina ya rangi za nyuzi' => false]],
    ['prompt' => 'Je, fitting muslin hutumiwa kwa nini?', 'options' => ['Kuangalia sura kabla ya nguo ya mwisho' => true, 'Kuhifadhi nyuzi' => false, 'Kukata vipande vikubwa' => false]],
    ['prompt' => 'Kwa nini ni muhimu kukusanya vifaa kabla ya kuanza?', 'options' => ['Ili kufanya kazi iwe rahisi na isikosewe' => true, 'Ili kupunguza muda wa mafunzo' => false, 'Ili kubadili aina ya mashine' => false]],
    ['prompt' => 'Je, buttonhole stitch ni nini?', 'options' => ['Mshono unaofanya shimo la kifungo' => true, 'Mshono wa kushona nyuma' => false, 'Mshono wa mvua' => false]],
    ['prompt' => 'Kwa nini unahitaji unpicker?', 'options' => ['Ili kufungua mshono bila kuharibu kitambaa' => true, 'Ili kupima pande' => false, 'Ili kuwapaka maji' => false]],
    ['prompt' => 'Ni nini husaidia kupima vizuri midriff ya nguo?', 'options' => ['Measuring tape na alama sahihi' => true, 'Screwdriver tu' => false, 'Mshono wa pamba tu' => false]],
    ['prompt' => 'Je, center front ni nini?', 'options' => ['Mstari wa kati wa mbele wa nguo' => true, 'Pembe ya nyuma ya nguo' => false, 'Mstari wa ukingo wa kushona' => false]],
    ['prompt' => 'Kwa nini ni muhimu kutumia pattern pieces kwa mpangilio sahihi?', 'options' => ['Ili vipande vinapatana vizuri na si kupoteza nyenzo' => true, 'Ili kuongeza uzito wa nguo' => false, 'Ili kukata kwa kasi tu' => false]],
    ['prompt' => 'Nini maana ya pleat?', 'options' => ['Fold ya kitambaa iliyofungwa ili kutoa sura' => true, 'Kifungo cha kupumzika' => false, 'Mshono wa nyuma tu' => false]],
    ['prompt' => 'Je, dart tuck ni nini?', 'options' => ['Mshono unaofanya sehemu ya nguo iwe na umbo laini' => true, 'Kipande cha nyuzi tu' => false, 'Aina ya doa' => false]],
    ['prompt' => 'Kwa nini unahitaji seam guide?', 'options' => ['Ili kuongoza upana wa mshono' => true, 'Ili kulinda sindano' => false, 'Ili kupima joto' => false]],
    ['prompt' => 'Nini faida ya kutumia pressing cloth?', 'options' => ['Hulinda kitambaa na husaidia kupiga chuma salama' => true, 'Hubadilisha rangi ya kitambaa' => false, 'Hupunguza uzito wa mashine' => false]],
    ['prompt' => 'Je, closure ni nini kwenye nguo?', 'options' => ['Njia ya kufunga nguo kama vifungo au zip' => true, 'Rangi ya kitambaa tu' => false, 'Mchoro wa stitch' => false]],
    ['prompt' => 'Kwa nini ni muhimu kuweka nyuzi za rangi moja?', 'options' => ['Ili mshono uonekane mzuri na usiingiliane' => true, 'Ili kuondoa mafuta' => false, 'Ili kubadili sura ya nguo' => false]],
    ['prompt' => 'Je, bobbin winding ni nini?', 'options' => ['Kufunga nyuzi ya chini kwenye bobbin' => true, 'Kukata nyuzi za juu' => false, 'Kufanya mshono wa nyuma' => false]],
    ['prompt' => 'Nini maana ya straight stitch?', 'options' => ['Mshono wa moja kwa moja unaotumika sana' => true, 'Mshono wa mviringo tu' => false, 'Mshono wa kutengeneza pindo' => false]],
    ['prompt' => 'Kwa nini unahitaji seam allowance ya 1 cm kwa baadhi ya nguo?', 'options' => ['Ili mshono uwe na nafasi ya kutosha bila kuharibu sura' => true, 'Ili kupunguza kitambaa' => false, 'Ili kuongeza uzito wa blouse' => false]],
    ['prompt' => 'Je, hemline ni nini?', 'options' => ['Mstari wa chini wa nguo ambapo hem huwekwa' => true, 'Mstari wa mbele wa kifuko' => false, 'Mstari wa machafuko' => false]],
    ['prompt' => 'Kwa nini ni muhimu kujua ukubwa wa sindano?', 'options' => ['Ili usiivunje au kuidhoofisha nguo' => true, 'Ili kuhamisha kitambaa tu' => false, 'Ili kudumu kwa muda mfupi' => false]],
    ['prompt' => 'Je, gathering stitch hutumika kwa nini?', 'options' => ['Kukuza sehemu ya nguo na kuitengeneza kuwa laini' => true, 'Kufunga zip' => false, 'Kupima pamba' => false]],
    ['prompt' => 'Ni nini faida ya kutumia fabric weights?', 'options' => ['Husaidia kuweka kitambaa bila kupinda wakati wa kukata' => true, 'Husaidia kupiga chuma' => false, 'Husaidia kufunga hilo' => false]],
    ['prompt' => 'Kwa nini ni muhimu kufuata mwelekeo wa grainline kwenye pattern?', 'options' => ['Ili nguo iwe na sura sahihi na isibambike' => true, 'Ili kuongeza rangi tu' => false, 'Ili kupunguza nyuzi' => false]],
    ['prompt' => 'Je, pocket lining ni nini?', 'options' => ['Tabaka la ndani la mfuko' => true, 'Kifuko cha nje tu' => false, 'Chombo cha kupima' => false]],
    ['prompt' => 'Kwa nini unahitaji sewing gauge?', 'options' => ['Kupima na kuweka upana wa hems na seams' => true, 'Kufungua ushanga' => false, 'Kupiga rabara ya kitambaa' => false]],
    ['prompt' => 'Ni nini husaidia kupanga sura ya blouse?', 'options' => ['Darts, seams na fitting sahihi' => true, 'Maji tu' => false, 'Paa la nyumba' => false]],
    ['prompt' => 'Je, facing ni nini?', 'options' => ['Kipande cha kitambaa kinachofunika ukingo wa nguo' => true, 'Aina ya chuma' => false, 'Njia ya kupa rangi' => false]],
    ['prompt' => 'Kwa nini ni muhimu kupigia chuma sehemu za seam?', 'options' => ['Ili mshono uwe laini na nguo iwe na sura nzuri' => true, 'Ili kuondoa nyuzi zote' => false, 'Ili kubadilisha mpira wa chuma' => false]],
    ['prompt' => 'Je, cuff ni nini?', 'options' => ['Pindo la mkono au mguu la nguo' => true, 'Sehemu ya chini ya bobbin' => false, 'Kipande cha kujaza' => false]],
    ['prompt' => 'Kwa nini unahitaji pocket template?', 'options' => ['Ili kupanga mfuko kwa usahihi' => true, 'Ili kupikia chakula' => false, 'Ili kunyoosha nyuzi' => false]],
    ['prompt' => 'Nini maana ya tacking stitch?', 'options' => ['Mshono wa muda wa kuimarisha sehemu fulani' => true, 'Mshono wa kawaida wa kamba' => false, 'Mshono wa pindo la nje' => false]],
    ['prompt' => 'Je, understitching ni nini?', 'options' => ['Mshono unaoficha ukingo wa facing kwenye ndani' => true, 'Mshono wa kufunika pindo tu' => false, 'Mshono wa kukata kitambaa' => false]],
    ['prompt' => 'Kwa nini unahitaji stitch ripper kwa marekebisho?', 'options' => ['Ili kubadilisha mshono wa zamani bila kuharibu kitambaa' => true, 'Ili kupima kitambaa' => false, 'Ili kuoka mashine' => false]],
    ['prompt' => 'Nini maana ya waistband?', 'options' => ['Sehemu ya juu ya sketi au suruali inayofunga' => true, 'Pindo la chini tu' => false, 'Mstari wa mashine' => false]],
    ['prompt' => 'Je, dart manipulation ni nini?', 'options' => ['Kubadilisha nafasi ya dart ili iwe na sura mpya' => true, 'Kufunga zip' => false, 'Kupiga chuma tu' => false]],
    ['prompt' => 'Kwa nini ni muhimu kutengeneza mfano wa kwanza?', 'options' => ['Ili kuangalia sura na marekebisho kabla ya nguo ya mwisho' => true, 'Ili kupunguza rangi ya nyuzi' => false, 'Ili kujaza nafasi tu' => false]],
    ['prompt' => 'Je, ease ni nini katika muundo wa nguo?', 'options' => ['Nafasi ya ziada ya nguo ili iwe rahisi kuvalia' => true, 'Uzito wa mashine' => false, 'Rangi ya kitambaa' => false]],
    ['prompt' => 'Kwa nini ni muhimu kutumia seam sealant kwenye baadhi ya vifaa?', 'options' => ['Ili kuimarisha makali na kuzuia kubomoka' => true, 'Ili kuweka nyuzi zipya' => false, 'Ili kupunguza joto' => false]],
    ['prompt' => 'Je, lining fabric ni nini?', 'options' => ['Kitambaa cha ndani cha kusaidia sura na msisitizo' => true, 'Mara ya kupima' => false, 'Chombo cha kutengeneza zip' => false]],
    ['prompt' => 'Kwa nini unahitaji marking pen ya muda?', 'options' => ['Ili kuweka alama za kukata na kushona kabla ya mwisho' => true, 'Ili kupamba mashine' => false, 'Ili kutengeneza pamba' => false]],
    ['prompt' => 'Ni nini maana ya sleeve cap?', 'options' => ['Sehemu ya juu ya mkono inayounganisha na mwili wa nguo' => true, 'Upana wa sketi' => false, 'Pindo la chini la suruali' => false]],
    ['prompt' => 'Je, gather skirt hutumiwa kwa nini?', 'options' => ['Kutoa umbo la kupendeza na kupanua sehemu ya juu' => true, 'Kuongeza ukubwa wa mashine' => false, 'Kupunguza rangi ya nyuzi' => false]],
    ['prompt' => 'Kwa nini ni muhimu kuangalia thread path kwa kila mara?', 'options' => ['Ili nyuzi zisikose na mshono uwe mzuri' => true, 'Ili kutengeneza pamba' => false, 'Ili kupunguza saa' => false]],
    ['prompt' => 'Je, neckline ni nini?', 'options' => ['Ukingo wa shingo wa nguo' => true, 'Ukingo wa mguu wa suruali' => false, 'Nafasi ya bobbin' => false]],
    ['prompt' => 'Kwa nini unahitaji zipper foot?', 'options' => ['Ili kushona zip kwa usahihi na karibu na ukingo' => true, 'Ili kupima ncha ya sindano' => false, 'Ili kuweka nyuzi za bobbin' => false]],
    ['prompt' => 'Je, patch pocket ni nini?', 'options' => ['Mfuko wa nje uliokata na kushonwa moja kwa moja' => true, 'Mfuko wa ndani tu' => false, 'Mfuko wa alama' => false]],
    ['prompt' => 'Kwa nini unahitaji interfacing fusible?', 'options' => ['Ili kuimarisha sehemu za nguo kwa joto' => true, 'Ili kufuta nyuzi' => false, 'Ili kupunguza ukubwa wa nyuzi' => false]],
    ['prompt' => 'Nini maana ya grainline kwenye pattern?', 'options' => ['Mstari unaoonyesha mwelekeo wa nyuzi za kitambaa' => true, 'Rangi ya nguo' => false, 'Namba ya mradi' => false]],
    ['prompt' => 'Je, crosswise grain ni nini?', 'options' => ['Mwelekeo wa nyuzi unaopita kutoka upande mmoja hadi mwingine' => true, 'Mwelekeo wa bobbin' => false, 'Mstari wa sindano' => false]],
    ['prompt' => 'Kwa nini ni muhimu kutumia stabilizer kwa embroidery?', 'options' => ['Ili kitambaa kisichanganyike na mshono usiingiliane' => true, 'Ili kuongezea uzito wa chuma' => false, 'Ili kupunguza ubora wa nyuzi' => false]],
    ['prompt' => 'Je, notch markings ni nini?', 'options' => ['Alama za kuonyesha sehemu za kuunganisha vipande' => true, 'Rangi ya pamba' => false, 'Aina ya zip' => false]],
    ['prompt' => 'Kwa nini unahitaji seam gauge kwa kuunda hems?', 'options' => ['Ili kupima upana wa hem kwa usahihi' => true, 'Ili kupanua makali ya kitambaa' => false, 'Ili kuchora picha tu' => false]],
    ['prompt' => 'Ni nini faida ya kutumia double needle?', 'options' => ['Hupata mistari miwili ya mshono pamoja' => true, 'Hupunguza uzito wa mashine' => false, 'Hukata kitambaa' => false]],
    ['prompt' => 'Je, waistband interfacing ni nini?', 'options' => ['Tabaka la ndani linaloauni eneo la kiuno' => true, 'Mshono wa juu tu' => false, 'Kipande cha bobbin' => false]],
    ['prompt' => 'Kwa nini ni muhimu kujitayarisha kwa usalama kabla ya kushona?', 'options' => ['Ili kuepuka kuumia na kuhakikisha mashine inafanya kazi vizuri' => true, 'Ili kupunguza rangi ya nyuzi' => false, 'Ili kuondoa kitambaa' => false]],
    ['prompt' => 'Je, seam allowance ni nini?', 'options' => ['Umbali wa kutosha kutoka ukingo wa kitambaa hadi mshono' => true, 'Kipimo cha sindano tu' => false, 'Rangi ya kitambaa' => false]],
    ['prompt' => 'Kwa nini ni muhimu kutumia correct needle for fabric?', 'options' => ['Ili mshono usivunjike na kitambaa kisiharibike' => true, 'Ili kupunguza muda wa kazi' => false, 'Ili kupunguza thread guides' => false]],
    ['prompt' => 'Je, tack stitch hutumika kwa nini?', 'options' => ['Kuweka sehemu za muda kabla ya mshono wa mwisho' => true, 'Kufunika rangi ya nguo' => false, 'Kukata nyuzi' => false]],
];

$score = 0;
$answers = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($questions as $index => $question) {
        $selected = $_POST['q' . $index] ?? '';
        $answers[$index] = $selected;

        $correct = array_search(true, $question['options'], true);
        if ($selected === $correct) {
            $score++;
        }
    }
}
?>
<main class="container section">
    <section class="card">
        <h1>Quiz ya Ufundi</h1>
        <p class="lead">Jaza maswali haya kuhusu ufundi wa kushona na uone kama umejibu sawasawa au la.</p>
    </section>

    <section class="card">
        <form method="post" class="form-grid">
            <?php foreach ($questions as $index => $question):
                $correct = array_search(true, $question['options'], true);
                ?>
                <article class="card">
                    <h3><?php echo ($index + 1) . '. ' . $question['prompt']; ?></h3>
                    <?php foreach ($question['options'] as $option => $isCorrect): ?>
                        <label class="label" style="font-weight: 500;">
                            <input type="radio" name="q<?php echo $index; ?>" value="<?php echo $option; ?>" required <?php echo (($_SERVER['REQUEST_METHOD'] === 'POST') && ($answers[$index] ?? '') === $option) ? 'checked' : ''; ?>>
                            <?php echo $option; ?>
                        </label>
                    <?php endforeach; ?>

                    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
                        <p
                            style="margin-top: 10px; font-weight: 700; color: <?php echo (($answers[$index] ?? '') === $correct) ? '#047857' : '#b91c1c'; ?>;">
                            <?php echo (($answers[$index] ?? '') === $correct) ? 'Sahihi! Umejibu vizuri.' : 'Hapana. Jibu sahihi ni: ' . $correct; ?>
                        </p>
                    <?php endif; ?>
                </article>
            <?php endforeach; ?>

            <button type="submit" class="btn btn-primary">Angalia majibu</button>
        </form>

        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
            <article class="card" style="margin-top: 16px; background: #ecfdf5; border-color: #a7f3d0;">
                <h3>Matokeo yako</h3>
                <p class="lead">Umejibu maswali <?php echo $score; ?> kati ya <?php echo count($questions); ?> sawasawa.</p>
                <p><?php echo $score === count($questions) ? 'Umefanikiwa kabisa! Umeonyesha uelewa mzuri wa ufundi.' : 'Jitayarishe zaidi, unaweza kusoma tena sehemu za ufundi na mashine.'; ?>
                </p>
            </article>
        <?php endif; ?>
    </section>
</main>
<?php include 'includes/footer.php'; ?>
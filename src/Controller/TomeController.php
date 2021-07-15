<?php

namespace App\Controller;

use App\Entity\Tome;
use App\Form\Type\TomeFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TomeController extends AbstractController
{
    public $chunks = [1, 2, 3];
    public $temporaryChaucer =<<<CHA
        Whan that Aprill with his shoures soote
    The droghte of March hath perced to the roote,
    And bathed every veyne in swich licour
    Of which vertu engendred is the flour,
    Whan Zephirus eek with his sweete breeth
    Inspired hath in every holt and heeth
    The tendre croppes, and the yonge sonne
    Hath in the Ram his halve cours yronne,
    And smale foweles maken melodye,
    That slepen al the nyght with open ye
    (so priketh hem Nature in hir corages),
    Thanne longen folk to goon on pilgrimages,
    And palmeres for to seken straunge strondes,
    To ferne halwes, kowthe in sondry londes;
    And specially from every shires ende
    Of Engelond to Caunterbury they wende,
    The hooly blisful martir for to seke,
    That hem hath holpen whan that they were seeke.
    
    Bifil that in that seson on a day,
    In Southwerk at the Tabard as I lay
    Redy to wenden on my pilgrymage
    To Caunterbury with ful devout corage,
    At nyght was come into that hostelrye
    Wel nyne and twenty in a compaignye,
    Of sondry folk, by aventure yfalle
    In felaweshipe, and pilgrimes were they alle,
    That toward Caunterbury wolden ryde.
    The chambres and the stables weren wyde,
    And wel we weren esed atte beste.
    And shortly, whan the sonne was to reste,
    So hadde I spoken with hem everichon
    That I was of hir felaweshipe anon,
    And made forward erly for to ryse,
    To take oure wey ther as I yow devyse.
    
    But nathelees, whil I have tyme and space,
    Er that I ferther in this tale pace,
    Me thynketh it acordaunt to resoun
    To telle yow al the condicioun
    Of ech of hem, so as it semed me,
    And whiche they weren, and of what degree,
    And eek in what array that they were inne;
    And at a knyght than wol I first bigynne.
    
    A knyght ther was, and that a worthy man,
    That fro the tyme that he first bigan
    To riden out, he loved chivalrie,
    Trouthe and honour, fredom and curteisie.
    Ful worthy was he in his lordes werre,
    And therto hadde he riden, no man ferre,
    As wel in cristendom as in hethenesse,
    And evere honoured for his worthynesse.
    At Alisaundre he was whan it was wonne.
    Ful ofte tyme he hadde the bord bigonne
    Aboven alle nacions in Pruce;
    In Lettow hadde he reysed and in Ruce,
    No cristen man so ofte of his degree.
    In Gernade at the seege eek hadde he be
    Of Algezir, and riden in Belmarye.
    At Lyeys was he and at Satalye,
    Whan they were wonne; and in the Grete See
    At many a noble armee hadde he be.
    At mortal batailles hadde he been fiftene,
    And foughten for oure feith at Tramyssene
    In lystes thries, and ay slayn his foo.
    This ilke worthy knyght hadde been also
    Somtyme with the lord of Palatye

    Agayn another hethen in Turkye.
    And everemoore he hadde a sovereyn prys;
    And of his port as meeke as is a mayde.
    He nevere yet no vileynye ne sayde
    In al his lyf unto no maner wight.
    He was a verray, parfit gentil knyght.
    But, for to tellen yow of his array,
    His hors were goode, but he was nat gay.
    Of fustian he wered a gypon
    Al bismotered with his habergeon,
    For he was late ycome from his viage,
    And wente for to doon his pilgrymage.
    
    With hym ther was his sone, a yong squier,
    A lovyere and a lusty bacheler,
    With lokkes crulle as they were leyd in presse.
    Of twenty yeer of age he was, I gesse.
    And wonderly delyvere, and of greet strengthe.
    And he hadde been somtyme in chyvachie
    In Flaundres, in Artoys, and Pycardie,
    And born hym weel, as of so litel space,
    In hope to stonden in his lady grace.
    Embrouded was he, as it were a meede
    Al ful of fresshe floures, whyte and reede.
    Syngynge he was, or floytynge, al the day;
    He was as fressh as is the month of May.
    Short was his gowne, with sleves longe and wyde.
    Wel koude he sitte on hors and faire ryde.
    He koude songes make and wel endite,
    Juste and eek daunce, and weel purtreye and write.
    So hoote he lovede that by nyghtertale.
    He sleep namoore than dooth a nyghtyngale.
    Curteis he was, lowely, and servysable,
    And carf biforn his fader at the table. 
    CHA;

    /**
     * @Route("/set-text", name="settext")
     */
    public function setText(EntityManagerInterface $em, Request $req): Response
    {
        $tome = new Tome();
        $tome->setTitle('Canterbury Tales Prologue');
        $tome->setBody($this->temporaryChaucer);

        $form = $this->createForm(TomeFormType::class, $tome);

        $form->handleRequest($req);
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var Tome $tome */
            $tome = $form->getData();
            $em->persist($tome);
            $em->flush();
            $this->addFlash('alert', "Things happened, probably good.");
            return $this->redirectToRoute('writequestions', ['FOO!', 'BAR!',]);
        }

        // make an array of all the tomes. pass array of tomes to the twig.
        $tomes = [['title' => $tome->getTitle() , 'body' => $tome->getBody()], ['title' => 'BBBBB', 'body' => 'in the field around the bend ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum '], ['title' => 'cCCCCCc', 'body' => 'lorem ipsum lorem the corn grows high ipsum lorem ipsum '],];
        return $this->render('tome/bin/_step1.html.twig', [
            'form' => $form->createView(),
            'tomes' => $tomes,
        ]);
    }
}

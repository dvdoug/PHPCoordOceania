<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * Australasia and Oceania/Australia - 138°E to 144°E, 36°S to 40°S (SJ54) onshore.
 * @internal
 */
class Extent2944
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [144, -38.623570589356], [144, -38.436172690117], [144, -38.248774790877], [144, -38.061376891637], [144, -37.873978992397], [144, -37.686581093158], [144, -37.499183193918], [144, -37.311785294678], [144, -37.124387395438], [144, -36.936989496199], [144, -36.749591596959], [144, -36.562193697719], [144, -36.374795798479], [144, -36.18739789924], [144, -36], [143.61534234692, -36], [143.23068469384, -36], [142.84602704076, -36], [142.46136938767, -36], [142.07671173459, -36], [141.69205408151, -36], [141.30739642843, -36], [140.92273877535, -36], [140.53808112227, -36], [140.15342346918, -36], [139.7687658161, -36], [139.38410816302, -36], [139.44322395325, -36.063426971435], [139.45625114441, -36.08185005188], [139.45929527283, -36.085597991943], [139.5949344635, -36.235235214233], [139.61717414856, -36.274444580078], [139.76322364807, -36.566967010498], [139.76563453674, -36.583442687988], [139.76615715027, -36.586320877075], [139.76699638367, -36.589529037476], [139.76809120178, -36.592685699463], [139.76941108704, -36.595724105835], [139.79491233826, -36.648872375488], [139.7993106842, -36.66669845581], [139.80314826965, -36.733219146729], [139.80325126648, -36.759954452515], [139.80035591125, -36.787870407104], [139.79493904114, -36.811805725098], [139.79013633728, -36.821355819702], [139.77351570129, -36.843631744385], [139.75316047668, -36.860466003418], [139.71615028381, -36.880670547485], [139.71202278137, -36.883218765259], [139.70900917053, -36.885395050049], [139.70617866516, -36.887727737427], [139.60824320861, -36.893870748714], [139.60581706115, -36.896483816341], [139.60360835143, -36.899220861629], [139.60162470885, -36.902068533138], [139.59987376281, -36.905017294124], [139.59837077209, -36.908051885799], [139.59711573669, -36.91116086407], [139.5961124713, -36.914330877498], [139.59542964049, -36.917233862117], [139.57713435241, -37.010020651058], [139.57662318297, -37.013427175716], [139.57640574523, -37.016696371273], [139.67175483704, -37.016307830811], [139.67207145691, -37.01957321167], [139.6726474762, -37.022817611694], [139.67349052429, -37.026025772095], [139.67458534241, -37.029184341431], [139.67605018616, -37.032503128052], [139.71883201599, -37.118532180786], [139.71973991394, -37.131879806518], [139.7146320343, -37.137186050415], [139.71284675598, -37.139137268066], [139.71063041687, -37.141874313354], [139.70864295959, -37.144721984863], [139.70689201355, -37.14767074585], [139.70496559143, -37.151691436768], [139.69188117981, -37.184978485107], [139.69066429138, -37.188714981079], [139.68992042542, -37.191932678223], [139.68943977356, -37.195182800293], [139.68922233582, -37.19845199585], [139.68927192688, -37.201726913452], [139.68958854675, -37.20499420166], [139.69017219543, -37.208238601685], [139.69101524353, -37.211444854736], [139.69211769104, -37.214603424072], [139.69347190857, -37.217697143555], [139.69548606873, -37.221395492554], [139.74233436584, -37.296113967896], [139.75948905945, -37.32301902771], [139.76254081726, -37.327146530151], [139.78998374939, -37.359470367432], [139.7915096283, -37.361186981201], [139.9442615509, -37.522657394409], [139.9462223053, -37.524620056152], [139.94896125793, -37.527061462402], [139.95189094543, -37.529354095459], [139.9550037384, -37.531490325928], [139.95828056335, -37.533458709717], [139.96171379089, -37.535251617432], [139.96528053284, -37.536861419678], [139.96896934509, -37.53828048706], [139.97276878357, -37.539505004883], [139.97665596008, -37.54052734375], [139.98061943054, -37.541343688965], [139.98463630676, -37.54195022583], [139.98869514465, -37.542346954346], [139.99277305603, -37.542528152466], [139.9968585968, -37.542495727539], [140.00050544739, -37.542278289795], [140.02817726135, -37.539978027344], [140.03279685974, -37.540082931519], [140.04554176331, -37.545906066894], [140.07479286194, -37.564723968506], [140.18446159363, -37.697282791138], [140.27818489075, -37.839874267578], [140.29763221741, -37.879737854004], [140.29934883118, -37.882900238037], [140.30123329163, -37.885818481445], [140.30335044861, -37.888631820679], [140.30569648743, -37.891330718994], [140.30825614929, -37.8939037323], [140.31137657166, -37.896627426147], [140.48578453064, -38.03558921814], [140.48803138733, -38.037288665771], [140.49117851257, -38.0394115448], [140.49368095398, -38.040912628174], [140.55022239685, -38.073089599609], [140.55409431458, -38.075092315674], [140.55738639832, -38.076559066772], [140.64313316345, -38.112054824829], [140.64701652527, -38.113521575928], [140.65085411072, -38.114725112915], [140.6547794342, -38.115728378296], [140.65921592712, -38.116598129272], [140.68661308289, -38.120983123779], [140.68977928162, -38.121423721313], [140.69386863708, -38.121797561645], [140.69689750671, -38.121936798096], [140.77069282532, -38.123891830444], [140.77534675598, -38.123847961426], [140.77944374084, -38.12357711792], [140.78351020813, -38.123096466064], [140.78752326965, -38.122402191162], [140.79147148132, -38.121501922607], [140.79567146301, -38.120286941528], [140.83862495422, -38.106243133545], [140.85272026062, -38.10492515564], [140.93104362488, -38.108972549438], [140.95087242126, -38.112361907959], [140.97840309143, -38.120450973511], [140.99905204773, -38.127889633179], [141.07411766052, -38.157922744751], [141.09262275696, -38.166355133057], [141.11127281189, -38.176296234131], [141.15454292297, -38.199995040893], [141.1981754303, -38.230396270752], [141.24650001526, -38.264680862427], [141.32418195172, -38.421625312321], [141.34756223126, -38.445230659001], [141.41003171368, -38.503822501653], [141.41309873028, -38.506466086858], [141.41610471173, -38.508726294987], [141.41928998394, -38.510826285832], [141.42264310284, -38.512760337346], [141.42614499493, -38.514515098088], [141.43027249737, -38.516277488225], [141.54803220196, -38.561206992619], [141.55081311627, -38.562200721257], [141.5546774046, -38.563381370061], [141.55863324566, -38.564357932561], [141.56265393658, -38.565128501408], [141.56673184796, -38.565691169255], [141.57084409161, -38.566040214055], [141.57497159405, -38.566175635808], [141.57910291119, -38.566095527165], [141.58321515484, -38.565803702824], [141.58729306622, -38.565298255437], [141.59182874127, -38.564474280827], [141.67125836773, -38.547001060002], [141.67418424054, -38.546293433659], [141.67804852887, -38.545166190617], [141.68180982037, -38.543838675969], [141.68545285626, -38.542318519108], [141.68895856304, -38.540613349431], [141.69231549664, -38.538728888982], [141.69550839825, -38.536672767155], [141.69852200909, -38.534454520695], [141.70134107037, -38.532083686345], [141.70396176739, -38.529571708195], [141.70636502667, -38.526926215642], [141.70854321881, -38.524162467473], [141.71048489971, -38.521288093083], [141.70852470398, -38.419353485107], [141.70997428894, -38.416301727295], [141.71117210388, -38.413177490234], [141.71210670471, -38.409997940063], [141.71277427673, -38.406774520874], [141.71317481995, -38.403520584106], [141.71330833435, -38.400253295898], [141.71317100525, -38.396982192993], [141.71276283264, -38.393724441528], [141.71208763123, -38.390493392944], [141.7111492157, -38.387300491333], [141.70985603333, -38.38395690918], [141.69890347882, -38.450153525822], [141.69771710797, -38.447700675481], [141.69601575299, -38.444709952824], [141.69357434674, -38.44115846967], [141.71166801453, -38.326902389526], [141.73781394959, -38.319242477417], [141.75589561462, -38.317100524902], [141.81487846375, -38.317449569702], [141.93342399597, -38.337787628174], [141.94322776794, -38.345640182495], [141.94633293152, -38.347957611084], [141.94969367981, -38.350147247314], [142.02460670471, -38.395275115967], [142.02688407898, -38.396583557129], [142.0530872345, -38.410947799683], [142.05798530579, -38.413333892822], [142.13193321228, -38.444541931152], [142.13652610779, -38.446237564087], [142.14040184021, -38.447401046753], [142.14435768127, -38.448362350464], [142.14838600159, -38.449117660522], [142.15246772766, -38.449661254883], [142.15718650818, -38.450021743774], [142.22520637512, -38.452695846558], [142.22812461853, -38.452756881714], [142.23223686218, -38.452661514282], [142.25488471985, -38.451541900635], [142.2590007782, -38.451229095459], [142.26307487488, -38.450704574585], [142.2670917511, -38.449970245361], [142.27103614807, -38.449029922485], [142.2748966217, -38.447885513306], [142.27864646912, -38.446544647217], [142.28227806091, -38.445009231567], [142.28577232361, -38.443290710449], [142.28911399841, -38.44139289856], [142.29229164124, -38.439323425293], [142.29528617859, -38.437093734741], [142.29819297791, -38.434617996216], [142.30367088318, -38.429594039917], [142.37511634827, -38.416156768799], [142.50555992126, -38.457042694092], [142.57551765442, -38.49568939209], [142.70019721985, -38.569286346435], [142.71432304382, -38.580656051636], [142.71772575378, -38.583166122436], [142.76217079163, -38.613597869873], [142.76539802551, -38.615663528442], [142.76878929138, -38.617563247681], [142.77232933044, -38.619285583496], [142.7754535675, -38.62060546875], [142.83239173889, -38.643085479736], [142.83645820618, -38.644535064697], [142.83947563171, -38.645441055298], [142.9516582489, -38.676536560059], [142.95607566834, -38.677593231201], [142.96012306213, -38.678323745728], [142.964220047, -38.678844451904], [142.96835136414, -38.679153442383], [142.97261238098, -38.679248809814], [143.0081653595, -38.679037094116], [143.02260780334, -38.682846069336], [143.06323432922, -38.701236724854], [143.09271430969, -38.716918945312], [143.13540458679, -38.751251220703], [143.13892936707, -38.753831863403], [143.14217567444, -38.755891799927], [143.1455821991, -38.757781982422], [143.14913749695, -38.759492874145], [143.1528263092, -38.761018753052], [143.15662956238, -38.762351989746], [143.16046333313, -38.763467788696], [143.31947898865, -38.805166244507], [143.32259178162, -38.805910110474], [143.363073349, -38.814695358276], [143.4015827179, -38.832530975342], [143.43440055847, -38.865598678589], [143.43720436096, -38.868221282959], [143.44016838074, -38.870639801025], [143.46157646179, -38.886943817139], [143.46452522278, -38.889055252075], [143.46778297424, -38.891107559204], [143.47120475769, -38.892988204956], [143.47477531433, -38.894691467285], [143.47847557068, -38.896207809448], [143.48229408264, -38.897531509399], [143.48620796204, -38.898656845093], [143.4894657135, -38.899425506592], [143.52734947205, -38.907495498657], [143.53178596497, -38.90828704834], [143.53589820862, -38.908790588379], [143.54004096985, -38.90908241272], [143.54419517517, -38.909160614014], [143.5483455658, -38.909025192261], [143.55247306824, -38.908676147461], [143.55655860901, -38.908115386963], [143.56058692932, -38.907344818115], [143.56453895569, -38.906370162964], [143.56839561462, -38.905191421509], [143.57214927673, -38.903816223145], [143.57577323914, -38.902250289917], [143.58006858826, -38.900047302246], [143.71195411682, -38.823766708374], [143.71595954895, -38.821157455444], [143.71892738342, -38.818899154663], [143.72170066833, -38.816492080688], [143.7242641449, -38.813945770264], [143.72661018372, -38.81127166748], [143.7287273407, -38.808479309082], [143.73060417175, -38.805582046509], [143.73223686218, -38.802593231201], [143.73391914368, -38.798721313477], [143.74212837219, -38.775705337524], [143.75786399841, -38.767133712768], [143.78302955627, -38.763036727905], [143.78789329529, -38.762071609497], [143.86155509949, -38.744253158569], [143.86402702332, -38.74361038208], [143.86787605286, -38.74242401123], [143.87161445618, -38.74104309082], [143.87522697449, -38.739469528198], [143.878698349, -38.737712860107], [143.88201332092, -38.735778808594], [143.88515663147, -38.733678817749], [143.88856697083, -38.731042861938], [143.95335960388, -38.675855636597], [143.95733451843, -38.671937942505], [144, -38.623570589356],
                ],
            ],
        ];
    }
}

<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * Australasia and Oceania/New Caledonia - 162°E to 168°E.
 * @internal
 */
class Extent3432
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [163.73637377611, -26.541000462683], [163.73636228866, -26.541001758435], [163.73150718313, -26.541429870717], [163.72663698457, -26.541620909656], [163.72176326231, -26.541574421432], [163.71689759403, -26.541290516479], [163.71205153829, -26.540769869224], [163.70723660704, -26.540013716481], [163.70246423833, -26.539023854515], [163.67772981203, -26.533261467965], [163.66147397212, -26.529469454859], [163.62917187209, -26.52193467474], [163.58062271089, -26.510591407476], [163.54057808908, -26.501219768874], [163.53208309127, -26.499231745873], [163.48355317826, -26.487855555103], [163.43503135678, -26.476462902284], [163.39343712466, -26.466680213466], [163.38652108005, -26.46505365414], [163.37977640432, -26.463464807086], [163.33801804937, -26.453628103686], [163.3072484222, -26.446367497836], [163.28952744289, -26.442186128513], [163.24104492892, -26.430727743655], [163.22053840429, -26.425873329451], [163.19257122946, -26.419253072969], [163.14410828001, -26.407761779305], [163.0956538755, -26.396254126245], [163.08626497553, -26.394020604129], [163.04721181781, -26.384730256228], [163.02292225356, -26.378943298523], [162.99877580897, -26.373190049245], [162.97495962839, -26.36750634243], [162.95035143483, -26.36163322164], [162.90845634979, -26.351619274482], [162.90193521334, -26.350060495635], [162.87400303759, -26.343373026408], [162.85352857737, -26.338471017889], [162.80513450468, -26.326865840753], [162.78887047298, -26.322959607295], [162.75674561347, -26.31524397296], [162.70836861817, -26.303605547212], [162.6822137235, -26.297303306394], [162.6600016243, -26.291951108482], [162.61166227434, -26.280284923203], [162.61164403429, -26.280280515948], [162.56329586893, -26.268593579302], [162.5150475966, -26.256912255704], [162.51497514301, -26.256894712093], [162.51495725298, -26.256890375612], [162.46662858391, -26.245170961582], [162.42559784852, -26.235205601754], [162.41832672908, -26.233439618534], [162.41830921491, -26.233435359691], [162.36999973745, -26.221683541497], [162.3510335407, -26.217062522059], [162.32169989051, -26.20991551744], [162.29886427832, -26.204342971875], [162.27340901313, -26.198131468263], [162.22512943205, -26.186331009463], [162.17685838134, -26.174514422472], [162.12859732541, -26.162681820787], [162.08034483196, -26.150832852126], [162.06535539107, -26.147146047292], [162.03210417522, -26.138967982749], [161.98517502359, -26.127407867156], [161.98388994925, -26.127091317176], [161.98387168967, -26.127086814075], [161.97604668834, -26.125156265362], [161.97092205431, -26.123746456547], [161.96587956384, -26.122066359935], [161.96093346166, -26.120120721703], [161.95609772025, -26.11791503817], [161.9513860003, -26.115455540266], [161.94681161215, -26.112749175934], [161.94238747819, -26.109803590502], [161.93812609635, -26.10662710508], [161.93403950479, -26.103228693061], [161.9301392479, -26.099617954767], [161.92643634369, -26.095805090328], [161.92294125265, -26.091800870873], [161.91966384821, -26.087616608094], [161.91661338886, -26.083264122298], [161.91379849198, -26.07875570901], [161.91122710949, -26.074104104244], [161.90890650539, -26.06932244852], [161.90684323527, -26.064424249745], [161.90504312774, -26.059423345054], [161.90351126801, -26.054333861721], [161.9022519835, -26.049170177247], [161.9012688316, -26.043946878749], [161.90056458968, -26.038678721752], [161.90014124717, -26.033380588499], [161.9, -26.02806744592], [161.9, -15.348633813428], [161.900137226, -15.343396794305], [161.90054852739, -15.338174148285], [161.90123277533, -15.332980209027], [161.9021880919, -15.327829231398], [161.90341185521, -15.322735352362], [161.90490070662, -15.317712552171], [161.90665055994, -15.312774616001], [161.90865661267, -15.307935096116], [161.91091335916, -15.303207274676], [161.91341460571, -15.298604127282], [161.91615348762, -15.294138287363], [161.91912248795, -15.289822011506], [161.92231345824, -15.285667145818], [161.9257176408, -15.28168509341], [161.92932569278, -15.277886783106], [161.93312771182, -15.274282639442], [161.93711326318, -15.270882554065], [161.94127140846, -15.267695858576], [161.94559073553, -15.264731298925], [161.95005938992, -15.261997011406], [161.95466510731, -15.259500500325], [161.95939524722, -15.257248617407], [162.12133957272, -15.185292659692], [162.28328389822, -15.113336701978], [162.2836391176, -15.113179694283], [162.56456511794, -14.98966136095], [162.84549111827, -14.866143027617], [163.1264171186, -14.742624694283], [163.13115635655, -14.740684178114], [163.13598872373, -14.738988829533], [163.14090154678, -14.737543094758], [163.14588194134, -14.73635076537], [163.15091684584, -14.735414968369], [163.15599305574, -14.734738157975], [163.1610972582, -14.734322109189], [163.16621606694, -14.734167913139], [163.17133605739, -14.734275974221], [163.17644380186, -14.734646009033], [163.1815259048, -14.735277047123], [163.18656903789, -14.736167433532], [163.19155997502, -14.737314833134], [163.19648562698, -14.738716236761], [163.20133307576, -14.740367969095], [163.20608960844, -14.742265698306], [163.21074275057, -14.744404447413], [163.2152802988, -14.746778607338], [163.21969035299, -14.749381951614], [163.22396134732, -14.752207652715], [163.22808208071, -14.755248299963], [163.35796308071, -14.856323299963], [163.36216499696, -14.859780887935], [163.3661726136, -14.863461923615], [163.5819276136, -15.072739423615], [163.7976826136, -15.282016923615], [163.80109176294, -15.285488636133], [163.81891376394, -15.304543637133], [163.81920838403, -15.304860008269], [163.83915938403, -15.326377008269], [163.83945875679, -15.326701311988], [163.85925775679, -15.348244311988], [163.85955398828, -15.34856805998], [163.87920298828, -15.37013705998], [163.87950132534, -15.370466013262], [163.89899832534, -15.392060013261], [163.89929689939, -15.39239218882], [163.91864189939, -15.41401118882], [163.9189387715, -15.4143444518], [163.9381337715, -15.4359894518], [163.93843271579, -15.436328090201], [163.95747571579, -15.457998090201], [163.95777630836, -15.458341728668], [163.97666730836, -15.480037728668], [163.97696650912, -15.480382944813], [163.99570550912, -15.502103944813], [163.99600454652, -15.502452181761], [164.01459254652, -15.524199181761], [164.01489161144, -15.524550711488], [164.03332861144, -15.546323711487], [164.03362968103, -15.546680945495], [164.05191368103, -15.568478945495], [164.05221271917, -15.568837149783], [164.07034571917, -15.590661149783], [164.07064815368, -15.591026907594], [164.08862815368, -15.612876907594], [164.08892560311, -15.613240114062], [164.10675460311, -15.635115114062], [164.10705647686, -15.63548731068], [164.12473347686, -15.657389310681], [164.12503272229, -15.657761897163], [164.14255672229, -15.679687897162], [164.14285646095, -15.680064786782], [164.16022946095, -15.702017786782], [164.16053103928, -15.702400784131], [164.17775103928, -15.724379784131], [164.1780492446, -15.724762310131], [164.1951172446, -15.746766310131], [164.19541847482, -15.747156638111], [164.21175747482, -15.768436638111], [164.21194334885, -15.768679489291], [164.41035234885, -16.028730989291], [164.6087217955, -16.288730647354], [164.61684117458, -16.299343857037], [164.61717279082, -16.299779796503], [164.63232079082, -16.319806796503], [164.63264787694, -16.320241687707], [164.64766787694, -16.340325687707], [164.64799007309, -16.34075894625], [164.66288307309, -16.36089894625], [164.66320509554, -16.361336906503], [164.67797109554, -16.381533907503], [164.6783157522, -16.382008242909], [164.679248818, -16.383300327853], [164.69289581213, -16.402145464639], [164.69321722718, -16.402591886337], [164.70774822718, -16.422891886337], [164.70806682427, -16.423339564258], [164.72247082427, -16.443697564258], [164.72278686262, -16.444146851477], [164.73706286262, -16.464560851477], [164.73737653717, -16.465012025538], [164.75152553717, -16.485483025538], [164.75183982655, -16.485940453117], [164.76585982655, -16.506467453116], [164.7661720167, -16.506927276245], [164.7764120167, -16.522100276245], [164.77650609003, -16.522239921697], [164.88790909052, -16.687910921697], [164.99931209103, -16.853581921697], [164.99942446976, -16.853749408257], [165.00978446976, -16.869223408257], [165.01009232675, -16.869686007567], [165.02355832675, -16.890043007567], [165.02386669647, -16.890512035809], [165.03721869647, -16.910945035809], [165.03752012045, -16.911409113766], [165.05075912045, -16.931916113766], [165.05106099184, -16.932386588315], [165.06418599184, -16.952968588315], [165.06448586496, -16.953441753283], [165.07749586496, -16.974097753283], [165.07779166205, -16.974570306769], [165.09068866205, -16.995302306769], [165.09098128648, -16.99577563344], [165.10376428648, -17.01658163344], [165.10405419269, -17.017056449732], [165.11672319269, -17.037936449732], [165.1170114376, -17.038414514977], [165.1295664376, -17.059369514977], [165.12985187562, -17.05984895591], [165.14229287562, -17.08087895591], [165.14257548421, -17.08135972554], [165.15490248421, -17.10246472554], [165.15518122099, -17.102945006536], [165.16739422099, -17.124124006536], [165.16767012567, -17.12460554552], [165.17976912567, -17.145858545521], [165.18004490454, -17.146346147822], [165.19202890454, -17.167674147822], [165.19229905248, -17.168158066994], [165.20416905248, -17.189560066994], [165.20443630952, -17.190045101792], [165.21619230952, -17.211521101792], [165.21645758006, -17.212008911776], [165.22809958006, -17.233559911776], [165.22836098325, -17.234047021266], [165.23988898325, -17.255672021266], [165.24014912501, -17.256163297314], [165.25156212501, -17.277862297314], [165.2518184803, -17.278352985592], [165.2631174803, -17.300126985592], [165.26337163266, -17.300620096572], [165.27455563266, -17.322468096572], [165.27480430551, -17.322957183555], [165.28587430551, -17.344878183555], [165.28612163486, -17.345371325247], [165.29707763486, -17.367367325247], [165.29732273604, -17.367862834054], [165.30816373604, -17.389932834054], [165.30840341936, -17.39042416821], [165.31366050223, -17.401275998728], [165.31595662094, -17.403552775693], [165.31633260894, -17.403927581068], [165.33391760894, -17.421550581068], [165.3342902517, -17.421926009775], [165.3517632517, -17.439623010775], [165.3521366861, -17.440003253917], [165.3694966861, -17.457774253917], [165.36986873264, -17.458157148134], [165.38711773264, -17.476004148134], [165.38748866371, -17.476389999972], [165.40462366371, -17.494309999972], [165.40499106411, -17.494696288121], [165.42201506411, -17.512691288121], [165.42238507337, -17.513084522749], [165.43929607337, -17.531154522749], [165.43966275364, -17.531548452929], [165.45646075364, -17.549692452929], [165.45682596971, -17.550089072667], [165.47351096971, -17.568307072667], [165.4738724747, -17.568703925748], [165.4904464747, -17.586996925748], [165.49081063386, -17.587401058047], [165.50727063386, -17.605768058047], [165.50762917482, -17.606170313703], [165.52397717482, -17.624611313703], [165.52433786717, -17.625020426881], [165.54057286717, -17.643536426881], [165.54093010426, -17.643946096099], [165.55705210426, -17.662536096099], [165.5574093549, -17.662950319066], [165.5734183549, -17.681615319066], [165.5737684001, -17.6820256734], [165.5896654001, -17.7007636734], [165.59002298598, -17.70118754136], [165.59855198598, -17.71135454136], [165.60101512371, -17.714410584719], [165.60533312371, -17.719988584719], [165.60567168838, -17.720428459898], [165.62066568838, -17.740021459898], [165.62099830625, -17.740458581471], [165.63587230625, -17.760117581471], [165.63620644971, -17.760561779989], [165.65095944971, -17.780287779988], [165.65128824625, -17.78072994327], [165.66592124625, -17.80052194327], [165.66625143664, -17.800971159487], [165.68076343664, -17.820830159487], [165.68108964577, -17.821279171923], [165.69548164577, -17.841205171923], [165.69580495314, -17.841655420933], [165.71007595314, -17.861646420934], [165.71039800163, -17.862100215276], [165.72454900163, -17.882158215276], [165.72487080665, -17.882617074584], [165.73890080665, -17.902742074584], [165.73921909159, -17.903201360837], [165.75312809159, -17.923392360837], [165.75344417185, -17.923853957268], [165.76723217185, -17.944110957268], [165.76754600959, -17.944574827448], [165.78121300959, -17.964897827448], [165.7815239355, -17.965362983026], [165.7950709355, -17.985752983026], [165.79538016426, -17.986221257827], [165.80880616426, -18.006677257827], [165.80911490672, -18.007150571201], [165.82241890672, -18.027672571201], [165.82272271766, -18.028144104929], [165.83590671766, -18.048733104929], [165.83620759248, -18.049205882629], [165.84927059248, -18.069859882628], [165.8495731867, -18.070341341201], [165.8625141867, -18.091062341201], [165.86280944181, -18.091538059728], [165.87563044181, -18.112325059728], [165.8759268305, -18.112808666195], [165.8886258305, -18.133661666194], [165.88891783186, -18.134144219127], [165.90149583186, -18.155063219128], [165.90178524344, -18.155547641401], [165.91334381956, -18.175019161022], [165.93526786299, -18.185379174354], [165.93575245533, -18.185609756854], [165.96283945633, -18.198587756854], [165.96332777275, -18.198823350169], [165.99024177275, -18.21189835017], [165.99072576893, -18.212135092443], [166.01746776893, -18.225305092443], [166.0179635611, -18.225550968978], [166.0445325611, -18.238818968978], [166.04502261839, -18.239065374796], [166.07141861839, -18.252428374795], [166.07191637748, -18.252682115151], [166.09813937748, -18.266142115151], [166.09863941098, -18.266400557906], [166.12468941098, -18.279957557906], [166.12518900673, -18.280219351833], [166.15106600673, -18.293872351833], [166.15157047779, -18.294140361284], [166.17727447779, -18.307890361284], [166.17778110229, -18.308163250761], [166.20331210229, -18.322010250761], [166.20382217674, -18.322288816152], [166.21069296893, -18.326067103007], [166.22915975927, -18.336215393282], [166.22967420102, -18.336500073268], [166.25486520102, -18.350537073269], [166.2553768013, -18.350824118363], [166.2803938013, -18.364957118363], [166.28091004714, -18.365250789901], [166.30575304714, -18.379480789901], [166.30626971795, -18.37977878737], [166.33093971795, -18.39410578737], [166.33145978831, -18.39440991475], [166.35595578831, -18.40883391475], [166.35647509294, -18.409141812179], [166.38079709294, -18.423661812179], [166.3813320162, -18.423983424818], [166.38584500691, -18.426715987793], [166.39825427507, -18.432552112105], [166.3988095737, -18.432815357766], [166.4259635737, -18.445790357766], [166.42651736815, -18.44605707116], [166.45347436815, -18.45914207116], [166.45403128697, -18.459414537488], [166.48079128697, -18.472609537488], [166.48135398264, -18.472889196367], [166.50791498264, -18.486194197367], [166.50847804351, -18.486478472059], [166.53484204351, -18.499893472059], [166.53540808487, -18.500183765551], [166.56157508487, -18.513708765551], [166.56215452714, -18.514010666014], [166.57897352714, -18.522843666014], [166.5791123758, -18.522916725559], [166.66713709902, -18.569321882729], [166.71536160154, -18.594555460121], [166.71577154588, -18.594771175342], [166.73694254588, -18.605974175342], [166.73754080418, -18.606293355024], [166.76219880418, -18.619556355024], [166.76280074801, -18.619882789577], [166.78727674801, -18.633264789577], [166.78788116815, -18.633597964412], [166.81217316815, -18.647097964412], [166.81277822097, -18.647436967068], [166.83688722097, -18.661054967068], [166.8374943253, -18.661400693673], [166.8614203253, -18.675136693673], [166.8620321015, -18.675490797259], [166.8857751015, -18.689345797259], [166.88638601253, -18.689705196833], [166.90994601253, -18.703678196833], [166.91056299155, -18.704047119763], [166.93393899155, -18.718139119763], [166.93455332504, -18.718512482132], [166.95774632504, -18.732722482132], [166.95836220893, -18.733102897684], [166.98137220893, -18.747430897683], [166.98199552215, -18.747822216346], [167.00482052215, -18.762269216347], [167.00544181796, -18.762665677518], [167.02808381896, -18.777231677518], [167.02870368452, -18.777633693238], [167.05116268452, -18.792317693238], [167.05178708523, -18.792729275957], [167.07406108523, -18.807531275957], [167.07468561429, -18.80794969407], [167.09677661429, -18.82287069407], [167.09740545897, -18.823298929272], [167.11931145897, -18.838338929272], [167.11993672851, -18.838771727768], [167.14165872851, -18.853929727768], [167.14228712499, -18.854371833388], [167.16382512499, -18.869648833388], [167.16445145296, -18.870096725107], [167.18580545296, -18.885491725107], [167.18643640735, -18.885950357181], [167.20760540735, -18.901464357181], [167.20823224764, -18.901927511425], [167.22921724764, -18.917559511425], [167.22984841053, -18.918033557692], [167.25064841053, -18.933784557692], [167.2512775913, -18.934264941053], [167.2718935913, -18.950134941053], [167.27252194835, -18.95062263643], [167.29295294835, -18.96661063643], [167.29358140201, -18.967106492835], [167.31382840201, -18.983213492835], [167.31446002886, -18.983720157087], [167.33452102886, -18.999946157087], [167.33514769955, -19.00045723426], [167.35502369955, -19.01680123426], [167.3556475846, -19.017318505567], [167.3753395846, -19.033780505567], [167.3759685389, -19.034310705032], [167.3954745389, -19.050891705032], [167.396100324, -19.05142810928], [167.415421324, -19.06812810928], [167.41604568705, -19.068672307608], [167.43518168705, -19.085491307608], [167.43580008157, -19.086039371648], [167.45475108157, -19.102975371648], [167.45537626148, -19.103538828014], [167.47414126148, -19.120594828014], [167.47475822562, -19.121160335594], [167.49333822562, -19.138334335594], [167.49395510558, -19.138909377043], [167.51234910558, -19.156201377043], [167.51296583447, -19.156786113789], [167.53117383447, -19.174197113789], [167.5317861129, -19.174787597172], [167.5498091129, -19.192317597172], [167.55041670373, -19.192913620795], [167.56825370373, -19.210560620795], [167.56886454318, -19.211170191433], [167.58651554318, -19.228937191433], [167.58711545902, -19.229546234613], [167.60458145902, -19.247430234613], [167.60518615567, -19.248054811304], [167.61704883222, -19.2604145408], [167.62678931292, -19.266783104099], [167.62749860621, -19.267251171551], [167.64978160621, -19.282092171551], [167.6504933887, -19.282570654338], [167.6725663887, -19.297546654338], [167.67330651997, -19.298053678794], [167.67419459527, -19.298667923062], [167.69507561222, -19.313066251797], [167.69579084615, -19.313564047233], [167.71746984615, -19.328793047233], [167.71825117186, -19.329347519394], [167.71855853466, -19.329567862602], [167.73958879127, -19.344583354235], [167.74030211819, -19.345097415509], [167.76158611819, -19.360578415509], [167.76230491666, -19.361106152728], [167.78337691666, -19.376722152728], [167.78409219899, -19.377257198495], [167.80495419899, -19.393008198495], [167.80567854182, -19.39356028059], [167.81263454182, -19.39891228059], [167.81729013474, -19.402722664038], [167.82170816944, -19.406806110716], [167.83818116944, -19.422977110716], [167.83884383854, -19.423633728728], [167.85811083854, -19.442903728728], [167.85877487137, -19.443574161666], [167.87777387137, -19.462938161666], [167.87843554274, -19.463618979581], [167.89716754274, -19.483076979581], [167.89782841494, -19.48377007734], [167.91629341494, -19.50332207734], [167.91695693153, -19.504031525154], [167.93515293153, -19.523677525154], [167.93580677337, -19.524390354838], [167.93787647304, -19.526668801042], [167.95339896188, -19.543493271203], [167.95406474718, -19.54422208577], [167.97193774718, -19.56398208577], [167.97259974191, -19.564721312345], [167.99020274191, -19.584575313344], [167.99088096784, -19.58534823746], [167.99165174927, -19.586235803951], [168.00814042752, -19.60515946019], [168.0087998196, -19.605923986494], [168.0258998196, -19.625953986494], [168.02653171813, -19.626701535958], [168.04292198948, -19.646285184998], [168.05967977476, -19.665747189129], [168.06034527592, -19.666528150213], [168.07644461992, -19.685618146215], [168.07980638994, -19.689829616245], [168.08293641834, -19.694216061236], [168.08582561616, -19.698764743841], [168.08846559375, -19.703462455604], [168.09084868515, -19.708295555321], [168.09296797034, -19.713250008648], [168.09481729535, -19.718311428853], [168.09639129011, -19.723465118598], [168.09768538405, -19.728696112608], [168.0986958194, -19.733989221136], [168.09941966205, -19.739329074065], [168.09985481011, -19.744700165541], [168.1, -19.750086899002], [168.1, -25.942013537378], [168.09986724699, -25.947164554554], [168.09946934044, -25.952301895469], [168.09880733681, -25.957411920175], [168.09788299376, -25.962481061249], [168.09669876547, -25.967495859816], [168.09525779614, -25.972443001285], [168.09356391164, -25.977309350697], [168.09162160933, -25.982081987602], [168.08943604614, -25.986748240363], [168.08701302486, -25.991295719798], [168.08435897878, -25.995712352075], [168.08148095453, -25.99998641077], [168.07838659345, -26.004106548], [168.07508411124, -26.008061824553], [168.07158227621, -26.011841738933], [168.06789038593, -26.015436255238], [168.0640182426, -26.018835829813], [168.05997612698, -26.022031436581], [168.05577477113, -26.025014591016], [168.05142532992, -26.027777372663], [168.04693935136, -26.03031244617], [168.042328746, -26.032613080764], [168.03760575528, -26.034673168124], [168.03278291901, -26.036487238591], [168.02787304213, -26.038050475702], [168.02288916064, -26.039358728966], [168.01784450705, -26.040408524893], [168.01275247522, -26.041197076212], [167.95349152381, -26.04881651583], [167.90402977207, -26.055155551628], [167.8545627036, -26.061477709805], [167.80509036543, -26.067782964347], [167.75561275776, -26.074071319045], [167.70612990034, -26.080342760117], [167.65664177866, -26.086597293188], [167.60714845945, -26.09283489109], [167.55764991068, -26.099055567867], [167.50814613513, -26.10525931691], [167.45863719451, -26.11144611049], [167.40912306179, -26.117615963239], [167.35960375202, -26.123768865757], [167.31007927255, -26.12990480712], [167.26054966821, -26.136023775494], [167.21101492681, -26.142125773609], [167.16146481032, -26.148212044819], [167.09121631518, -26.156808383119], [167.06238002368, -26.160329856086], [167.01282488318, -26.166363897067], [166.9632646552, -26.172380936585], [166.91369937011, -26.178380965792], [166.86412906744, -26.184363969915], [166.81455367767, -26.190329967323], [166.76497330792, -26.196278919936], [166.71538791814, -26.202210841361], [166.66579752889, -26.208125722712], [166.61620218142, -26.214023547893], [166.56660182495, -26.219904337671], [166.51699653553, -26.225768051842], [166.4673862913, -26.231614705356], [166.41777110456, -26.23744428793], [166.36815101504, -26.243256787247], [166.31852601604, -26.249052206424], [166.26889612425, -26.254830532345], [166.21926134215, -26.260591767046], [166.16965659215, -26.266331869091], [166.1695349494, -26.266345869734], [165.87147998438, -26.300466040629], [165.87130151909, -26.300486308283], [165.51547601876, -26.34057247495], [165.15965051843, -26.380658641616], [164.8038250181, -26.420744808283], [164.44799951776, -26.46083097495], [164.09217401743, -26.500917141616], [163.73637377611, -26.541000462683],
                ],
            ],
        ];
    }
}

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
                    [163.62517202488, -26.541629839169], [163.98097915233, -26.501545742333], [164.33680465267, -26.461459575666], [164.892630153, -26.421373409], [165.24845565333, -26.381287242333], [165.60428115367, -26.341201075666], [165.960106654, -26.301114909], [165.960431654, -26.301075909], [166.25816161902, -26.266994738105], [166.30776636902, -26.26125463606], [166.35736626902, -26.25549744401], [166.40696128902, -26.249723171953], [166.45655140902, -26.243931819891], [166.50613663902, -26.238123397824], [166.55571695902, -26.23229790575], [166.60529234902, -26.226455353671], [166.65486279902, -26.220595751586], [166.70442828902, -26.214719089495], [166.75398882901, -26.208825397399], [166.80354437901, -26.202914665297], [166.85309494901, -26.196986903189], [166.90264050901, -26.191042121075], [166.95218106901, -26.185080308956], [167.00171658901, -26.179101496831], [167.05124706901, -26.1731056747], [167.10077250901, -26.167092852564], [167.15029286901, -26.161063040421], [167.1790943995, -26.157545806283], [167.24931836901, -26.14895246612], [167.29882346901, -26.142871713961], [167.34832344901, -26.136773991796], [167.39781830901, -26.130659309625], [167.44730803901, -26.124527667449], [167.49679260901, -26.118379075267], [167.54627201901, -26.11221354308], [167.59574624901, -26.106031080887], [167.64521528901, -26.099831678688], [167.69467913901, -26.093615356483], [167.74413776901, -26.087382124273], [167.79359117901, -26.081131972058], [167.84303935901, -26.074864919836], [167.89248227901, -26.068580967609], [167.94191994901, -26.062280125377], [167.99135233901, -26.055962393139], [168.04077944901, -26.049627790895], [168.1, -26.042013537378], [168.1, -26.036340328939], [168.1, -25.766666666667], [168.1, -25.6], [168.1, -25.433333333333], [168.1, -25.266666666667], [168.1, -25.1], [168.1, -24.933333333333], [168.1, -24.766666666667], [168.1, -24.6], [168.1, -24.433333333333], [168.1, -24.266666666666], [168.1, -24.1], [168.1, -23.933333333333], [168.1, -23.766666666667], [168.1, -23.6], [168.1, -23.433333333333], [168.1, -23.266666666666], [168.1, -23.1], [168.1, -22.933333333333], [168.1, -22.766666666667], [168.1, -22.6], [168.1, -22.433333333333], [168.1, -22.266666666667], [168.1, -22.1], [168.1, -21.933333333333], [168.1, -21.766666666667], [168.1, -21.6], [168.1, -21.233333333333], [168.1, -21.066666666667], [168.1, -20.9], [168.1, -20.733333333333], [168.1, -20.566666666667], [168.1, -20.4], [168.1, -20.233333333333], [168.1, -20.066666666666], [168.1, -19.9], [168.1, -19.650086899002], [168.083900656, -19.630996903], [168.066685656, -19.611003903], [168.066412656, -19.610693903], [168.049845656, -19.590882903], [168.032745656, -19.570852903], [168.016202656, -19.551866903], [168.015377656, -19.550916903], [167.997774656, -19.531062902], [167.979901656, -19.511302902], [167.964116656, -19.494193902], [167.961786656, -19.491628902], [167.943590656, -19.471982902], [167.925125656, -19.452430902], [167.906393656, -19.432972902], [167.887394656, -19.413608902], [167.868127656, -19.394338902], [167.851654656, -19.378167902], [167.844698656, -19.372815902], [167.823836656, -19.357064902], [167.802764656, -19.341448902], [167.781480656, -19.325967902], [167.760372656, -19.310896902], [167.759987656, -19.310620902], [167.738308656, -19.295391902], [167.717368656, -19.280952902], [167.716421656, -19.280297902], [167.694348656, -19.265321902], [167.672065656, -19.250480902], [167.652676656, -19.237803902], [167.650318656, -19.235302902], [167.633039656, -19.217299902], [167.615573656, -19.199415902], [167.597922656, -19.181648902], [167.580085656, -19.164001902], [167.562062656, -19.146471902], [167.543854656, -19.129060902], [167.525460656, -19.111768902], [167.506880656, -19.094594902], [167.488115656, -19.077538902], [167.469164656, -19.060602902], [167.450028656, -19.043783902], [167.430707656, -19.027083902], [167.411201656, -19.010502902], [167.391509656, -18.994040902], [167.371633656, -18.977696902], [167.351572656, -18.961470902], [167.331325656, -18.945363902], [167.310894656, -18.929375902], [167.290278656, -18.913505902], [167.269478656, -18.897754902], [167.248493656, -18.882122902], [167.227324656, -18.866608902], [167.205970656, -18.851213902], [167.184432656, -18.835936902], [167.162710656, -18.820778902], [167.140804656, -18.805738902], [167.118713656, -18.790817902], [167.096439656, -18.776015902], [167.073980656, -18.761331902], [167.051338655, -18.746765902], [167.028513655, -18.732318902], [167.005503655, -18.717990902], [166.982310655, -18.703780902], [166.958934655, -18.689688902], [166.935374655, -18.675715902], [166.911631655, -18.661860902], [166.887705655, -18.648124902], [166.863596655, -18.634506902], [166.839304655, -18.621006902], [166.814828655, -18.607624902], [166.790170655, -18.594361902], [166.768999655, -18.583158902], [166.720638655, -18.557853902], [166.632477655, -18.511376902], [166.615658655, -18.502543902], [166.589491655, -18.489018902], [166.563127655, -18.475603902], [166.536566655, -18.462298901], [166.509806655, -18.449103901], [166.482849655, -18.436018901], [166.455695655, -18.423043901], [166.438538655, -18.414974901], [166.429537655, -18.409524901], [166.405215655, -18.395004901], [166.380719655, -18.380580901], [166.356049655, -18.366253901], [166.331206655, -18.352023901], [166.306189655, -18.337890901], [166.280998655, -18.323853901], [166.262519655, -18.313698901], [166.255636655, -18.309913901], [166.230105655, -18.296066901], [166.204401655, -18.282316901], [166.178524655, -18.268663901], [166.152474655, -18.255106901], [166.126251655, -18.241646901], [166.099855655, -18.228283901], [166.073286655, -18.215015901], [166.046544655, -18.201845901], [166.019630655, -18.188770901], [165.992543654, -18.175792901], [165.965284654, -18.162911901], [165.942782654, -18.152423901], [165.940587654, -18.148628901], [165.928251654, -18.127577901], [165.915794654, -18.106592901], [165.903216654, -18.085673901], [165.890517654, -18.064820901], [165.877696654, -18.044033901], [165.864755654, -18.023312901], [165.851692654, -18.002658901], [165.838508654, -17.982069901], [165.825204654, -17.961547901], [165.811778654, -17.941091901], [165.798231654, -17.920701901], [165.784564654, -17.900378901], [165.770776654, -17.880121901], [165.756867654, -17.859930901], [165.742837654, -17.839805901], [165.728686654, -17.819747901], [165.714415654, -17.799756901], [165.700023654, -17.779830901], [165.685511654, -17.759971901], [165.670878654, -17.740179901], [165.656125654, -17.720453901], [165.641251654, -17.700794901], [165.626257654, -17.681201901], [165.621939654, -17.675623901], [165.613410654, -17.665456901], [165.597513654, -17.646718901], [165.581504654, -17.628053901], [165.565382654, -17.609463901], [165.549147654, -17.590947901], [165.532799654, -17.572506901], [165.516339654, -17.554139901], [165.499765654, -17.535846901], [165.483080654, -17.517628901], [165.466282654, -17.499484901], [165.449371654, -17.481414901], [165.432347654, -17.463419901], [165.415212654, -17.445499901], [165.397963654, -17.427652901], [165.380603654, -17.409881901], [165.363130654, -17.3921849], [165.345545654, -17.3745619], [165.331062654, -17.3602009], [165.329134654, -17.3561649], [165.318407654, -17.3340219], [165.307566654, -17.3119519], [165.296610654, -17.2899559], [165.285540654, -17.2680349], [165.274356654, -17.2461869], [165.263057654, -17.2244129], [165.251644654, -17.2027139], [165.240116654, -17.1810889], [165.228474654, -17.1595379], [165.216718654, -17.1380619], [165.204848654, -17.1166599], [165.192864654, -17.0953319], [165.180765654, -17.0740789], [165.168552654, -17.0528999], [165.156225654, -17.0317949], [165.143784654, -17.0107649], [165.131229654, -16.9898099], [165.118560654, -16.9689299], [165.105777654, -16.9481239], [165.092880654, -16.9273919], [165.079870654, -16.9067359], [165.066745654, -16.8861539], [165.053506654, -16.8656469], [165.040154654, -16.8452139], [165.026688654, -16.8248569], [165.016328654, -16.8093829], [164.9049256535, -16.6437119], [164.793522653, -16.4780409], [164.783282653, -16.4628679], [164.569262653, -16.4423409], [164.555113653, -16.4218699], [164.540837653, -16.4014559], [164.526433653, -16.3810979], [164.511902653, -16.3607979], [164.498216653, -16.3418989], [164.497244653, -16.3405529], [164.482478653, -16.320355899], [164.467585653, -16.300215899], [164.452565653, -16.280131899], [164.437417653, -16.260104899], [164.429258653, -16.249439899], [164.230849653, -15.989388399], [164.032440653, -15.729336899], [164.016101653, -15.708056899], [163.999033653, -15.686052899], [163.981813653, -15.664073899], [163.964440653, -15.642120899], [163.946916653, -15.620194899], [163.929239653, -15.598292899], [163.911410653, -15.576417899], [163.893430653, -15.554567899], [163.875297653, -15.532743899], [163.857013653, -15.510945899], [163.838576653, -15.489172899], [163.819988653, -15.467425899], [163.801249653, -15.445704899], [163.782358653, -15.424008899], [163.763315653, -15.402338899], [163.744120653, -15.380693899], [163.724775653, -15.359074899], [163.705278653, -15.337480899], [163.685629653, -15.315911899], [163.665830653, -15.294368899], [163.645879653, -15.272851899], [163.628057652, -15.253796898], [163.412302652, -15.044519398], [163.196547652, -14.835241898], [163.066666652, -14.734166898], [162.78574065167, -14.857685231333], [162.50481465133, -14.981203564666], [162.223888651, -15.104721898], [162.0619443255, -15.176677855714], [161.9, -15.248633813428], [161.9, -15.566666666667], [161.9, -15.733333333333], [161.9, -15.9], [161.9, -16.066666666667], [161.9, -16.233333333333], [161.9, -16.4], [161.9, -16.566666666667], [161.9, -16.733333333333], [161.9, -16.9], [161.9, -17.066666666667], [161.9, -17.233333333333], [161.9, -17.4], [161.9, -17.566666666667], [161.9, -17.733333333333], [161.9, -17.9], [161.9, -18.066666666667], [161.9, -18.233333333333], [161.9, -18.4], [161.9, -18.566666666667], [161.9, -18.733333333333], [161.9, -18.9], [161.9, -19.066666666666], [161.9, -19.233333333333], [161.9, -19.4], [161.9, -19.566666666667], [161.9, -19.733333333333], [161.9, -19.9], [161.9, -20.066666666666], [161.9, -20.233333333333], [161.9, -20.4], [161.9, -20.566666666667], [161.9, -20.733333333333], [161.9, -20.9], [161.9, -21.066666666667], [161.9, -21.233333333333], [161.9, -21.6], [161.9, -21.766666666667], [161.9, -21.933333333333], [161.9, -22.1], [161.9, -22.266666666667], [161.9, -22.433333333333], [161.9, -22.6], [161.9, -22.766666666667], [161.9, -22.933333333333], [161.9, -23.1], [161.9, -23.266666666666], [161.9, -23.433333333333], [161.9, -23.6], [161.9, -23.766666666667], [161.9, -23.933333333333], [161.9, -24.1], [161.9, -24.266666666666], [161.9, -24.433333333333], [161.9, -24.6], [161.9, -24.766666666667], [161.9, -24.933333333333], [161.9, -25.1], [161.9, -25.266666666667], [161.9, -25.433333333333], [161.9, -25.6], [161.9, -25.766666666667], [161.9, -26.060760811632], [161.9, -26.1], [161.9, -26.12806744592], [161.90782500132, -26.129997994633], [161.90782544774, -26.129998104684], [161.90909296454, -26.130310328049], [161.95602231904, -26.141870493614], [161.98923898678, -26.150040054395], [162.004229, -26.153727], [162.052445, -26.165567], [162.100671, -26.177391], [162.148907, -26.189199], [162.197152, -26.200991], [162.22257090075, -26.207193622656], [162.24540708904, -26.212766308808], [162.27470555229, -26.219904733553], [162.29367174904, -26.224525752991], [162.34194600111, -26.236268995457], [162.34194606794, -26.236269011702], [162.34919934022, -26.238030658537], [162.34919938959, -26.238030670527], [162.39023, -26.247996], [162.43852364911, -26.259706915222], [162.43852399994, -26.25970700023], [162.43857903106, -26.259720323981], [162.48682689904, -26.271401549681], [162.53513977987, -26.283079950416], [162.53513999918, -26.283080003387], [162.583462, -26.294742], [162.60563910534, -26.300085759182], [162.631794, -26.306388], [162.680136, -26.318018], [162.7122239683, -26.325724766542], [162.728488, -26.329631], [162.776848, -26.341228], [162.79728702435, -26.346121517624], [162.82521899904, -26.352808938713], [162.83170478108, -26.354359259867], [162.873599, -26.364373], [162.8981741255, -26.370238222659], [162.92198882904, -26.375921576967], [162.9460998953, -26.381666390043], [162.970388, -26.387453], [163.00940810003, -26.396735477884], [163.018797, -26.398969], [163.067215, -26.410468], [163.115643, -26.421951], [163.14357380612, -26.428562640095], [163.16408080904, -26.433417167522], [163.21252784903, -26.444867161619], [163.23021385901, -26.449040272906], [163.260984, -26.456301], [163.30270545371, -26.466129003322], [163.30945050903, -26.467717939799], [163.31633139692, -26.469336223935], [163.357926, -26.479119], [163.406411, -26.490503], [163.454906, -26.501871], [163.46336500031, -26.503850591631], [163.50340998903, -26.513222316104], [163.55192359903, -26.524557270168], [163.5841906396, -26.53208386548], [163.600447, -26.535876], [163.62515365138, -26.541631911648], [163.62517202488, -26.541629839169],
                ],
            ],
        ];
    }
}

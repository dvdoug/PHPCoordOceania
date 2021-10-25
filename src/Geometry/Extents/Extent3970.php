<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * Australasia and Oceania/New Zealand - nearshore west of 168°E.
 * @internal
 */
class Extent3970
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [168.1, -42.493718605831], [167.91662481433, -42.82205224023], [167.73324962865, -43.150385874629], [167.54987444298, -43.478719509029], [167.25336869856, -43.751816774718], [166.75686295414, -44.024914040408], [166.46035720971, -44.298011306097], [166.27020627078, -44.668832517453], [166.08005533185, -45.03965372881], [165.88990439292, -45.610474940166], [165.85082789815, -45.922742906916], [165.81175140339, -46.235010873666], [165.77267490863, -46.547278840417], [165.97627355353, -46.696961276967], [166.17987219842, -46.846643713518], [166.51099977451, -47.101883335182], [166.8421273506, -47.357122956846], [167.26131651974, -47.488813571092], [167.48050568888, -47.620504185338], [167.76030435307, -47.713065255636], [167.97396060533, -47.743440148249], [168.1, -47.734451118693], [168.1, -47.433333333333], [168.1, -47.293619562253], [168.05550727844, -47.32218132019], [168.05126533508, -47.324617004395], [168.04755363464, -47.326434707642], [168.04365501404, -47.32808265686], [168.03964958191, -47.329532241821], [168.0262752533, -47.333991622925], [168.02202949524, -47.335286712646], [168.01768074036, -47.33638343811], [168.01321372986, -47.337285614014], [168.00865516663, -47.337989425659], [168.00402030945, -47.338492965698], [167.99933204651, -47.338794326782], [167.9946056366, -47.338891601563], [167.9898639679, -47.33878288269], [167.98512992859, -47.338470077515], [167.98205909729, -47.338157272339], [167.96926460266, -47.336663818359], [167.96378288269, -47.335845565796], [167.95883140564, -47.334851837158], [167.90197243842, -47.346594146804], [167.89226698897, -47.325708294347], [167.88232002258, -47.354203796387], [167.88087043762, -47.358159637451], [167.87941322327, -47.361083602905], [167.87766609192, -47.363929367065], [167.87562904358, -47.366681671143], [167.87332115173, -47.369332885742], [167.87074241638, -47.371869659424], [167.86791191101, -47.374280548096], [167.86451301575, -47.376779174805], [167.85404167175, -47.383815383911], [167.85139045715, -47.385499572754], [167.84827766418, -47.387260055542], [167.82558403015, -47.399322128296], [167.82165489197, -47.401242828369], [167.81774864197, -47.402885055542], [167.81367073059, -47.404349899292], [167.80944404602, -47.405631637573], [167.80508766174, -47.406720733643], [167.80059013367, -47.407622909546], [167.72774085999, -47.420426940918], [167.72321662903, -47.421115493774], [167.71815071106, -47.421643829346], [167.64823875427, -47.426963424683], [167.64438591003, -47.427184677124], [167.63965187073, -47.427270507812], [167.63490257263, -47.427150344849], [167.63016090393, -47.426826095581], [167.62544975281, -47.426299667358], [167.62078056335, -47.425571060181], [167.61782417297, -47.425000762939], [167.60295448303, -47.421905136108], [167.59761772156, -47.420606231689], [167.59321174622, -47.419297790527], [167.58892784119, -47.417806243896], [167.58478889465, -47.416137313843], [167.5808139801, -47.414298629761], [167.57701454163, -47.412297821045], [167.54723057639, -47.420362905794], [167.54565510642, -47.417360739046], [167.5442780007, -47.414045767122], [167.50262746163, -47.403089956575], [167.47309326067, -47.409596782365], [167.44634407524, -47.403350215593], [167.41306913381, -47.378110172742], [167.39237210887, -47.328048754387], [167.39321134227, -47.3235664851], [167.43200586411, -47.271163747101], [167.4334173021, -47.26742725113], [167.4969092753, -47.211561717366], [167.53332724074, -47.227492278075], [167.54669775466, -47.213438933348], [167.58527541182, -47.214228862217], [167.71888447586, -47.091318546463], [167.74410833815, -47.02837843225], [167.83170661926, -47.015609359741], [167.83957252502, -47.003949737549], [167.8407245636, -46.999507522583], [167.84033164978, -46.996631240845], [167.83312568665, -46.97455368042], [167.82906684875, -46.967664337158], [167.82295188904, -46.961726760864], [167.81224403381, -46.953538513184], [167.80841026306, -46.950254058838], [167.80574760437, -46.947587585449], [167.80334434509, -46.944821929932], [167.80083045959, -46.941386795044], [167.78999290466, -46.924485778809], [167.78780326843, -46.920468902588], [167.78653297424, -46.917419052124], [167.70387982155, -46.918867159538], [167.70321224953, -46.915750551872], [167.70285366799, -46.912624407463], [167.70279263283, -46.909832049065], [167.66311019101, -46.878889230587], [167.67698362702, -46.836281059227], [167.72768377415, -46.821774670004], [167.80260429382, -46.790982818603], [167.80398902893, -46.787305450439], [167.80545005798, -46.784383392334], [167.80720100403, -46.781541442871], [167.80923423767, -46.778791046143], [167.81153831482, -46.77614364624], [167.81410560608, -46.773610687256], [167.81692466736, -46.771203613281], [167.81998405457, -46.76893196106], [167.82390937805, -46.766427612305], [167.85106620789, -46.750859832764], [167.85586509705, -46.748445129394], [167.85973701477, -46.746806716919], [167.86377677917, -46.745345687866], [167.86796150208, -46.744069671631], [167.87227592468, -46.742984390259], [167.87670478821, -46.742091751099], [167.88122138977, -46.741397476196], [167.88581428528, -46.7409034729], [167.88957557678, -46.740651702881], [168.01352272034, -46.73454246521], [168.01864204407, -46.734431838989], [168.0233379364, -46.734546279907], [168.02802238464, -46.73486289978], [168.0326839447, -46.735383605957], [168.0372959137, -46.73610458374], [168.04184303284, -46.737022018433], [168.04630622864, -46.738134002685], [168.05066642761, -46.739432907104], [168.05490074158, -46.740916824341], [168.05998573303, -46.743020629883], [168.1, -46.761580996616], [168.1, -46.513411878428], [168.0805355072, -46.516955947876], [168.02259788513, -46.531642532349], [167.98139533997, -46.543576812744], [167.97668800354, -46.544780349731], [167.9722743988, -46.545672988892], [167.96776924133, -46.546369171143], [167.96319160461, -46.546863174438], [167.95856056213, -46.547154998779], [167.95389900208, -46.547240829468], [167.94922218323, -46.547124481201], [167.94454917908, -46.546802139282], [167.94052467346, -46.546357727051], [167.91768989563, -46.543399429321], [167.91278419495, -46.542632675171], [167.90825233459, -46.541707611084], [167.90380821228, -46.540589904785], [167.89947090149, -46.539283370972], [167.89525566101, -46.537791824341], [167.89118156433, -46.536124801636], [167.88726768494, -46.534288024902], [167.88352928162, -46.532291030884], [167.87998542786, -46.530139541626], [167.87664375305, -46.527843093872], [167.87338600159, -46.525294876099], [167.7610147899, -46.462499237061], [167.75842079576, -46.460179901123], [167.75579628404, -46.457511520386], [167.75342735704, -46.454742050171], [167.75132545885, -46.45188293457], [167.74950203355, -46.448945617676], [167.74796471055, -46.445945358276], [167.74671730455, -46.442893600464], [167.74577125963, -46.43980178833], [167.74512276109, -46.436685180664], [167.74477943834, -46.433557128906], [167.74474129137, -46.430430984497], [167.74500832017, -46.427318191528], [167.74558052476, -46.424234008789], [167.74645409044, -46.42119178772], [167.7476252025, -46.418204879761], [167.74908623155, -46.415282821655], [167.7508371776, -46.412442779541], [167.75286659654, -46.409694290161], [167.75604805406, -46.406159973144], [167.76723274644, -46.395373916626], [167.75449156783, -46.356320192159], [167.66977095626, -46.321574022115], [167.63629875183, -46.312132503115], [167.63245353699, -46.311298991762], [167.62857017517, -46.310850764834], [167.59945640564, -46.309124614321], [167.58047828674, -46.326362228394], [167.57847175598, -46.32905921936], [167.57616386414, -46.331700897217], [167.57282981873, -46.334903335571], [167.51254997253, -46.385852432251], [167.50884971619, -46.388640975952], [167.50556907654, -46.390760040283], [167.50207862854, -46.392720794678], [167.49838981628, -46.394519424438], [167.49452552795, -46.396144485474], [167.49049720764, -46.397592163086], [167.48632392883, -46.398854827881], [167.48375663757, -46.399522399902], [167.40735969543, -46.418153381348], [167.40121040344, -46.41943321228], [167.39670906067, -46.420110321045], [167.39213523865, -46.420585250854], [167.38751182556, -46.42085609436], [167.3828578949, -46.420922851563], [167.37819252014, -46.420785522461], [167.37353477478, -46.420442199707], [167.368907547, -46.419896697998], [167.36432609558, -46.419149017334], [167.35981712341, -46.418204879761], [167.35596809387, -46.417226409912], [167.34157905579, -46.413262939453], [167.3249584198, -46.410403823852], [167.17495689392, -46.387382125854], [166.89111747742, -46.376191711426], [166.86006202698, -46.372285461426], [166.85398902893, -46.371970748901], [166.82819786072, -46.373620605469], [166.79879798889, -46.377173995972], [166.79330863953, -46.377679443359], [166.74429740906, -46.380323028564], [166.73857917786, -46.380422210693], [166.73352088928, -46.380244827271], [166.71978034973, -46.379386520386], [166.7159198761, -46.37907371521], [166.71120109558, -46.378497695923], [166.656067276, -46.370429611206], [166.65169563293, -46.369693374634], [166.64707221985, -46.368699645996], [166.60078468323, -46.357558822632], [166.59662666321, -46.356460189819], [166.59232749939, -46.355115509033], [166.58815422058, -46.35358581543], [166.58412590027, -46.351882553101], [166.58026161194, -46.350007629394], [166.57657661438, -46.347974395752], [166.57275810242, -46.345567321777], [166.52246579648, -46.324873636856], [166.51983747007, -46.32298536171], [166.51678189756, -46.320522974625], [166.51395902158, -46.317940424576], [166.51138791562, -46.315245340958], [166.51115726971, -46.316203116506], [166.47251615049, -46.275161271946], [166.46948346616, -46.274785524265], [166.46492490293, -46.274014955418], [166.46044263364, -46.273046022312], [166.4560442877, -46.271884446995], [166.45176038267, -46.270532136814], [166.44759854795, -46.269000535862], [166.44358548643, -46.267291551487], [166.43973264219, -46.265412813084], [166.43605908872, -46.263373857395], [166.43258389951, -46.261184221165], [166.42931470396, -46.258851533787], [166.42626676084, -46.256387239353], [166.42345914365, -46.253798967259], [166.41484498416, -46.245051293359], [166.36617617196, -46.216137893828], [166.35235700132, -46.20088148679], [166.35089034861, -46.163736534983], [166.35456504822, -46.154792404175], [166.35055961609, -46.153077697754], [166.34671821594, -46.151195144653], [166.34305229187, -46.149152374268], [166.33958473206, -46.14695892334], [166.33552970886, -46.143991088867], [166.320545578, -46.131778335571], [166.31703224182, -46.128581619263], [166.31448020935, -46.125880813599], [166.31219139099, -46.123080825806], [166.31017341614, -46.120193099976], [166.30862083435, -46.117587661743], [166.29978981018, -46.101432418823], [166.2982334137, -46.09822807312], [166.29706993103, -46.095153427124], [166.29620018005, -46.092046356201], [166.29563179016, -46.088914489746], [166.27417974169, -46.009710396451], [166.29402198792, -45.936380004883], [166.29439582825, -45.932126617432], [166.29520835876, -45.928435897827], [166.30166664124, -45.906922912598], [166.30320777893, -45.903024291992], [166.3052028656, -45.899341201782], [166.31236305237, -45.888202285767], [166.31488075256, -45.884818649292], [166.31722679138, -45.882190322876], [166.31982841492, -45.879678344727], [166.32267417908, -45.877296066284], [166.32575645447, -45.875053024292], [166.30320667767, -45.840090562642], [166.3041585879, -45.826371908404], [166.30389918849, -45.823232412554], [166.30394115016, -45.820096731402], [166.31586117463, -45.812743902423], [166.33963813782, -45.798883056641], [166.34100379944, -45.795528030396], [166.34252586365, -45.792613601685], [166.34471168518, -45.789260482788], [166.36370506287, -45.76374206543], [166.36568107605, -45.761294937134], [166.40562477112, -45.716939544678], [166.40873374939, -45.713872528076], [166.41157569885, -45.711490249634], [166.41464653015, -45.709247207642], [166.41793479919, -45.707151031494], [166.42074241638, -45.705569839477], [166.43205680847, -45.699559783936], [166.43607749939, -45.697606658935], [166.43993415833, -45.696008300781], [166.44394340515, -45.69458732605], [166.44835700989, -45.693284606934], [166.48859062195, -45.682670211792], [166.49233665466, -45.68176612854], [166.49671211243, -45.680919265747], [166.52780952454, -45.649709320068], [166.52784767151, -45.646575546265], [166.52818336487, -45.643458938599], [166.52882423401, -45.640372848511], [166.52975883484, -45.63733253479], [166.53104438782, -45.63422164917], [166.59054985046, -45.308699035645], [166.59222831726, -45.305559539795], [166.63648643494, -45.233417892456], [166.65739479065, -45.199423217773], [166.66005744934, -45.195761108398], [166.66238441467, -45.193130874634], [166.66543998718, -45.190195465088], [166.71408119202, -45.148191833496], [166.71806373596, -45.145174407959], [166.72109642029, -45.142637634277], [166.72143974304, -45.138931655884], [166.72207298279, -45.135845565796], [166.72300376892, -45.132805252075], [166.72402992249, -45.13024559021], [166.73945655823, -45.095737838745], [166.74105873108, -45.092611694336], [166.7428440094, -45.089779281616], [166.74490013123, -45.087042236328], [166.74684944153, -45.084804916382], [166.79941596985, -45.028234863281], [166.80217018127, -45.025524520874], [166.80498542786, -45.023138427734], [166.80802574158, -45.020891571045], [166.81128349304, -45.0187915802], [166.81474723816, -45.016847991943], [166.81839408875, -45.015070343018], [166.82221641541, -45.013464355469], [166.82619514465, -45.01203956604], [166.830311203, -45.010799789429], [166.83454933167, -45.009750747681], [166.83889045715, -45.008898162842], [166.84331550598, -45.008243942261], [166.84835472107, -45.007761383057], [167.18891868591, -44.872785949707], [167.19039115906, -44.871424102783], [167.24628791809, -44.82272567749], [167.2740322113, -44.799185180664], [167.27631721497, -44.797396087646], [167.28967247009, -44.787533187866], [167.31333122253, -44.770931625366], [167.31662712097, -44.768785858154], [167.36941871643, -44.736698532104], [167.37288246155, -44.734735870361], [167.37650642395, -44.73295249939], [167.38030586243, -44.731340789795], [167.49953804016, -44.656607055664], [167.50224647522, -44.653913879395], [167.50503120422, -44.651522064209], [167.50782737732, -44.649420166016], [167.64907798767, -44.549660110474], [167.65240821838, -44.54747428894], [167.65653572083, -44.5451587677], [167.78963432312, -44.478132629395], [167.87943992615, -44.372360610962], [167.8827091217, -44.369007492065], [167.89503822327, -44.357632064819], [167.99614677429, -44.272064590454], [167.99958381653, -44.269432449341], [168.00218544006, -44.267694854736], [168.01609764099, -44.258901977539], [168.01792869568, -44.257799530029], [168.09024391174, -44.215921783447], [168.0947681427, -44.213604354858], [168.09873161316, -44.211897277832], [168.1, -44.21108870606], [168.1, -43.9], [168.1, -43.733333333333], [168.1, -43.566666666667], [168.1, -43.4], [168.1, -43.233333333333], [168.1, -43.066666666666], [168.1, -42.9], [168.1, -42.733333333333], [168.1, -42.566666666667], [168.1, -42.493718605831],
                ],
            ],
        ];
    }
}

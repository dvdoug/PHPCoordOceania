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
                    [168, -42.593718605831], [167.81662481433, -42.92205224023], [167.63324962865, -43.250385874629], [167.44987444298, -43.578719509029], [167.15336869856, -43.851816774718], [166.85686295414, -44.124914040408], [166.56035720971, -44.398011306097], [166.37020627078, -44.768832517453], [166.18005533185, -45.13965372881], [165.98990439292, -45.510474940166], [165.95082789815, -45.822742906916], [165.91175140339, -46.135010873666], [165.87267490863, -46.447278840417], [166.07627355353, -46.596961276967], [166.27987219842, -46.746643713518], [166.61099977451, -47.001883335182], [166.9421273506, -47.257122956846], [167.16131651974, -47.388813571092], [167.38050568888, -47.520504185338], [167.66030435307, -47.613065255636], [167.87396060533, -47.643440148249], [168, -47.634451118693], [168, -47.333333333333], [168, -47.193619562253], [167.95550727844, -47.22218132019], [167.95126533508, -47.224617004395], [167.94755363464, -47.226434707642], [167.94365501404, -47.22808265686], [167.93964958191, -47.229532241821], [167.9262752533, -47.233991622925], [167.92202949524, -47.235286712646], [167.91768074036, -47.23638343811], [167.91321372986, -47.237285614014], [167.90865516663, -47.237989425659], [167.90402030945, -47.238492965698], [167.89933204651, -47.238794326782], [167.8946056366, -47.238891601562], [167.8898639679, -47.23878288269], [167.88512992859, -47.238470077515], [167.88205909729, -47.238157272339], [167.86926460266, -47.236663818359], [167.86378288269, -47.235845565796], [167.85883140564, -47.234851837158], [167.80197243842, -47.246594146804], [167.79226698897, -47.225708294347], [167.78232002258, -47.254203796387], [167.78087043762, -47.258159637451], [167.77941322327, -47.261083602905], [167.77766609192, -47.263929367065], [167.77562904358, -47.266681671143], [167.77332115173, -47.269332885742], [167.77074241638, -47.271869659424], [167.76791191101, -47.274280548096], [167.76451301575, -47.276779174805], [167.75404167175, -47.283815383911], [167.75139045715, -47.285499572754], [167.74827766418, -47.287260055542], [167.72558403015, -47.299322128296], [167.72165489197, -47.301242828369], [167.71774864197, -47.302885055542], [167.71367073059, -47.304349899292], [167.70944404602, -47.305631637573], [167.70508766174, -47.306720733643], [167.70059013367, -47.307622909546], [167.62774085999, -47.320426940918], [167.62321662903, -47.321115493774], [167.61815071106, -47.321643829346], [167.54823875427, -47.326963424683], [167.54438591003, -47.327184677124], [167.53965187073, -47.327270507812], [167.53490257263, -47.327150344849], [167.53016090393, -47.326826095581], [167.52544975281, -47.326299667358], [167.52078056335, -47.325571060181], [167.51782417297, -47.325000762939], [167.50295448303, -47.321905136108], [167.49761772156, -47.320606231689], [167.49321174622, -47.319297790527], [167.48892784119, -47.317806243896], [167.48478889465, -47.316137313843], [167.4808139801, -47.314298629761], [167.47701454163, -47.312297821045], [167.44723057639, -47.320362905794], [167.44565510642, -47.317360739046], [167.4442780007, -47.314045767122], [167.40262746163, -47.303089956575], [167.37309326067, -47.309596782365], [167.34634407524, -47.303350215593], [167.31306913381, -47.278110172742], [167.29237210887, -47.228048754387], [167.29321134227, -47.2235664851], [167.33200586411, -47.171163747101], [167.3334173021, -47.16742725113], [167.3969092753, -47.111561717366], [167.43332724074, -47.127492278075], [167.44669775466, -47.113438933348], [167.48527541182, -47.114228862217], [167.61888447586, -46.991318546463], [167.64410833815, -46.92837843225], [167.73170661926, -46.915609359741], [167.73957252502, -46.903949737549], [167.7407245636, -46.899507522583], [167.74033164978, -46.896631240845], [167.73312568665, -46.87455368042], [167.72906684875, -46.867664337158], [167.72295188904, -46.861726760864], [167.71224403381, -46.853538513184], [167.70841026306, -46.850254058838], [167.70574760437, -46.847587585449], [167.70334434509, -46.844821929932], [167.70083045959, -46.841386795044], [167.68999290466, -46.824485778809], [167.68780326843, -46.820468902588], [167.68653297424, -46.817419052124], [167.60387982155, -46.818867159538], [167.60321224953, -46.815750551872], [167.60285366799, -46.812624407463], [167.60279263283, -46.809832049065], [167.56311019101, -46.778889230587], [167.57698362702, -46.736281059227], [167.62768377415, -46.721774670004], [167.70260429382, -46.690982818603], [167.70398902893, -46.687305450439], [167.70545005798, -46.684383392334], [167.70720100403, -46.681541442871], [167.70923423767, -46.678791046143], [167.71153831482, -46.67614364624], [167.71410560608, -46.673610687256], [167.71692466736, -46.671203613281], [167.71998405457, -46.66893196106], [167.72390937805, -46.666427612305], [167.75106620789, -46.650859832764], [167.75586509705, -46.648445129394], [167.75973701477, -46.646806716919], [167.76377677917, -46.645345687866], [167.76796150208, -46.644069671631], [167.77227592468, -46.642984390259], [167.77670478821, -46.642091751099], [167.78122138977, -46.641397476196], [167.78581428528, -46.6409034729], [167.78957557678, -46.640651702881], [167.91352272034, -46.63454246521], [167.91864204407, -46.634431838989], [167.9233379364, -46.634546279907], [167.92802238464, -46.63486289978], [167.9326839447, -46.635383605957], [167.9372959137, -46.63610458374], [167.94184303284, -46.637022018433], [167.94630622864, -46.638134002685], [167.95066642761, -46.639432907104], [167.95490074158, -46.640916824341], [167.95998573303, -46.643020629883], [168, -46.661580996616], [168, -46.413411878428], [167.9805355072, -46.416955947876], [167.92259788513, -46.431642532349], [167.88139533997, -46.443576812744], [167.87668800354, -46.444780349731], [167.8722743988, -46.445672988892], [167.86776924133, -46.446369171143], [167.86319160461, -46.446863174438], [167.85856056213, -46.447154998779], [167.85389900208, -46.447240829468], [167.84922218323, -46.447124481201], [167.84454917908, -46.446802139282], [167.84052467346, -46.446357727051], [167.81768989563, -46.443399429321], [167.81278419495, -46.442632675171], [167.80825233459, -46.441707611084], [167.80380821228, -46.440589904785], [167.79947090149, -46.439283370972], [167.79525566101, -46.437791824341], [167.79118156433, -46.436124801636], [167.78726768494, -46.434288024902], [167.78352928162, -46.432291030884], [167.77998542786, -46.430139541626], [167.77664375305, -46.427843093872], [167.77338600159, -46.425294876099], [167.6610147899, -46.362499237061], [167.65842079576, -46.360179901123], [167.65579628404, -46.357511520386], [167.65342735704, -46.354742050171], [167.65132545885, -46.35188293457], [167.64950203355, -46.348945617676], [167.64796471055, -46.345945358276], [167.64671730455, -46.342893600464], [167.64577125963, -46.33980178833], [167.64512276109, -46.336685180664], [167.64477943834, -46.333557128906], [167.64474129137, -46.330430984497], [167.64500832017, -46.327318191528], [167.64558052476, -46.324234008789], [167.64645409044, -46.32119178772], [167.6476252025, -46.318204879761], [167.64908623155, -46.315282821655], [167.6508371776, -46.312442779541], [167.65286659654, -46.309694290161], [167.65604805406, -46.306159973144], [167.66723274644, -46.295373916626], [167.65449156783, -46.256320192159], [167.56977095626, -46.221574022115], [167.53629875183, -46.212132503115], [167.53245353699, -46.211298991762], [167.52857017517, -46.210850764834], [167.49945640564, -46.209124614321], [167.48047828674, -46.226362228394], [167.47847175598, -46.22905921936], [167.47616386414, -46.231700897217], [167.47282981873, -46.234903335571], [167.41254997253, -46.285852432251], [167.40884971619, -46.288640975952], [167.40556907654, -46.290760040283], [167.40207862854, -46.292720794678], [167.39838981628, -46.294519424438], [167.39452552795, -46.296144485474], [167.39049720764, -46.297592163086], [167.38632392883, -46.298854827881], [167.38375663757, -46.299522399902], [167.30735969543, -46.318153381348], [167.30121040344, -46.31943321228], [167.29670906067, -46.320110321045], [167.29213523865, -46.320585250854], [167.28751182556, -46.32085609436], [167.2828578949, -46.320922851562], [167.27819252014, -46.320785522461], [167.27353477478, -46.320442199707], [167.268907547, -46.319896697998], [167.26432609558, -46.319149017334], [167.25981712341, -46.318204879761], [167.25596809387, -46.317226409912], [167.24157905579, -46.313262939453], [167.2249584198, -46.310403823852], [167.07495689392, -46.287382125854], [166.99111747742, -46.276191711426], [166.96006202698, -46.272285461426], [166.95398902893, -46.271970748901], [166.92819786072, -46.273620605469], [166.89879798889, -46.277173995972], [166.89330863953, -46.277679443359], [166.84429740906, -46.280323028564], [166.83857917786, -46.280422210693], [166.83352088928, -46.280244827271], [166.81978034973, -46.279386520386], [166.8159198761, -46.27907371521], [166.81120109558, -46.278497695923], [166.756067276, -46.270429611206], [166.75169563293, -46.269693374634], [166.74707221985, -46.268699645996], [166.70078468323, -46.257558822632], [166.69662666321, -46.256460189819], [166.69232749939, -46.255115509033], [166.68815422058, -46.25358581543], [166.68412590027, -46.251882553101], [166.68026161194, -46.250007629394], [166.67657661438, -46.247974395752], [166.67275810242, -46.245567321777], [166.62246579648, -46.224873636856], [166.61983747007, -46.22298536171], [166.61678189756, -46.220522974625], [166.61395902158, -46.217940424576], [166.61138791562, -46.215245340958], [166.61115726971, -46.216203116506], [166.57251615049, -46.175161271946], [166.56948346616, -46.174785524265], [166.56492490293, -46.174014955418], [166.56044263364, -46.173046022312], [166.5560442877, -46.171884446995], [166.55176038267, -46.170532136814], [166.54759854795, -46.169000535862], [166.54358548643, -46.167291551487], [166.53973264219, -46.165412813084], [166.53605908872, -46.163373857395], [166.53258389951, -46.161184221165], [166.52931470396, -46.158851533787], [166.52626676084, -46.156387239353], [166.52345914365, -46.153798967259], [166.51484498416, -46.145051293359], [166.46617617196, -46.116137893828], [166.45235700132, -46.10088148679], [166.45089034861, -46.063736534983], [166.45456504822, -46.054792404175], [166.45055961609, -46.053077697754], [166.44671821594, -46.051195144653], [166.44305229187, -46.049152374268], [166.43958473206, -46.04695892334], [166.43552970886, -46.043991088867], [166.420545578, -46.031778335571], [166.41703224182, -46.028581619263], [166.41448020935, -46.025880813599], [166.41219139099, -46.023080825806], [166.41017341614, -46.020193099976], [166.40862083435, -46.017587661743], [166.39978981018, -46.001432418823], [166.3982334137, -45.99822807312], [166.39706993103, -45.995153427124], [166.39620018005, -45.992046356201], [166.39563179016, -45.988914489746], [166.37417974169, -45.909710396451], [166.39402198792, -45.836380004883], [166.39439582825, -45.832126617432], [166.39520835876, -45.828435897827], [166.40166664124, -45.806922912598], [166.40320777893, -45.803024291992], [166.4052028656, -45.799341201782], [166.41236305237, -45.788202285767], [166.41488075256, -45.784818649292], [166.41722679138, -45.782190322876], [166.41982841492, -45.779678344727], [166.42267417908, -45.777296066284], [166.42575645447, -45.775053024292], [166.40320667767, -45.740090562642], [166.4041585879, -45.726371908404], [166.40389918849, -45.723232412554], [166.40394115016, -45.720096731402], [166.41586117463, -45.712743902423], [166.43963813782, -45.698883056641], [166.44100379944, -45.695528030396], [166.44252586365, -45.692613601685], [166.44471168518, -45.689260482788], [166.46370506287, -45.66374206543], [166.46568107605, -45.661294937134], [166.50562477112, -45.616939544678], [166.50873374939, -45.613872528076], [166.51157569885, -45.611490249634], [166.51464653015, -45.609247207642], [166.51793479919, -45.607151031494], [166.52074241638, -45.605569839477], [166.53205680847, -45.599559783936], [166.53607749939, -45.597606658935], [166.53993415833, -45.596008300781], [166.54394340515, -45.59458732605], [166.54835700989, -45.593284606934], [166.58859062195, -45.582670211792], [166.59233665466, -45.58176612854], [166.59671211243, -45.580919265747], [166.62780952454, -45.549709320068], [166.62784767151, -45.546575546265], [166.62818336487, -45.543458938599], [166.62882423401, -45.540372848511], [166.62975883484, -45.53733253479], [166.63104438782, -45.53422164917], [166.69054985046, -45.408699035645], [166.69222831726, -45.405559539795], [166.73648643494, -45.333417892456], [166.75739479065, -45.299423217773], [166.76005744934, -45.295761108398], [166.76238441467, -45.293130874634], [166.76543998718, -45.290195465088], [166.81408119202, -45.248191833496], [166.81806373596, -45.245174407959], [166.82109642029, -45.242637634277], [166.82143974304, -45.238931655884], [166.82207298279, -45.235845565796], [166.82300376892, -45.232805252075], [166.82402992249, -45.23024559021], [166.83945655823, -45.195737838745], [166.84105873108, -45.192611694336], [166.8428440094, -45.189779281616], [166.84490013123, -45.187042236328], [166.84684944153, -45.184804916382], [166.89941596985, -45.128234863281], [166.90217018127, -45.125524520874], [166.90498542786, -45.123138427734], [166.90802574158, -45.120891571045], [166.91128349304, -45.1187915802], [166.91474723816, -45.116847991943], [166.91839408875, -45.115070343018], [166.92221641541, -45.113464355469], [166.92619514465, -45.11203956604], [166.930311203, -45.110799789429], [166.93454933167, -45.109750747681], [166.93889045715, -45.108898162842], [166.94331550598, -45.108243942261], [166.94835472107, -45.107761383057], [167.08891868591, -44.972785949707], [167.09039115906, -44.971424102783], [167.14628791809, -44.92272567749], [167.1740322113, -44.899185180664], [167.17631721497, -44.897396087646], [167.18967247009, -44.887533187866], [167.21333122253, -44.870931625366], [167.21662712097, -44.868785858154], [167.26941871643, -44.836698532104], [167.27288246155, -44.834735870361], [167.27650642395, -44.83295249939], [167.28030586243, -44.831340789795], [167.39953804016, -44.756607055664], [167.40224647522, -44.753913879395], [167.40503120422, -44.751522064209], [167.40782737732, -44.749420166016], [167.54907798767, -44.649660110474], [167.55240821838, -44.64747428894], [167.55653572083, -44.6451587677], [167.68963432312, -44.578132629395], [167.77943992615, -44.472360610962], [167.7827091217, -44.469007492065], [167.79503822327, -44.457632064819], [167.89614677429, -44.372064590454], [167.89958381653, -44.369432449341], [167.90218544006, -44.367694854736], [167.91609764099, -44.358901977539], [167.91792869568, -44.357799530029], [167.99024391174, -44.315921783447], [167.9947681427, -44.313604354858], [167.99873161316, -44.311897277832], [168, -44.31108870606], [168, -44], [168, -43.833333333333], [168, -43.666666666667], [168, -43.5], [168, -43.333333333333], [168, -43.166666666667], [168, -43], [168, -42.833333333333], [168, -42.666666666667], [168, -42.593718605831],
                ],
            ],
        ];
    }
}

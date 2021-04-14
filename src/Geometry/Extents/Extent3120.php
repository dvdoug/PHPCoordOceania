<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * Australasia and Oceania/French Polynesia - west of 150°W.
 * @internal
 */
class Extent3120
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [-150, -12.931278960434], [-150.24505632, -13.141108428717], [-150.49011264, -13.350937897], [-150.50210464, -13.361184897], [-150.68996164033, -13.520433563666], [-150.87781864067, -13.679682230333], [-151.065675641, -13.838930897], [-151.319378641, -13.837823230333], [-151.573081641, -13.836715563666], [-151.826784641, -13.835607897], [-151.831780641, -13.835568897], [-152.155571308, -13.832404230333], [-152.479361975, -13.829239563666], [-152.803152642, -13.826074897], [-152.9838696425, -13.719588897], [-153.164586643, -13.613102897], [-153.400756643, -13.473636897], [-153.64102564325, -13.33072664675], [-153.8812946435, -13.1878163965], [-154.12156364375, -13.04490614625], [-154.361832644, -12.901995896], [-154.382569644, -12.889645896], [-154.423412644, -12.865440896], [-154.524397644, -12.805594896], [-154.774483144, -12.656676396], [-155.024568644, -12.507757896], [-155.115902644, -12.515354896], [-155.4034441445, -12.589105396], [-155.690985645, -12.662855896], [-155.9615471455, -12.783570396], [-156.232108646, -12.904284896], [-156.477739146, -13.0684273965], [-156.723369646, -13.232569897], [-156.936778646, -13.435323897], [-157.150187646, -13.638077897], [-157.150594646, -13.638627897], [-157.152206646, -13.640153897], [-157.152624646, -13.640718897], [-157.161206646, -13.648845897], [-157.3359866465, -13.884233397], [-157.510766647, -14.119620897], [-157.515162647, -14.128426897], [-157.516883647, -14.130735897], [-157.647641147, -14.3918068975], [-157.778398647, -14.652877898], [-157.860931647, -14.931881898], [-157.943464647, -15.210885898], [-157.966234647, -15.420382899], [-158.047145147, -15.644635899], [-158.128055647, -15.868888899], [-157.998333147, -16.136944399], [-157.868610647, -16.404999899], [-157.71291639675, -16.63333314925], [-157.5572221465, -16.8616663995], [-157.40152789625, -17.08999964975], [-157.245833646, -17.3183329], [-157.0050558458, -17.5237775002], [-156.7642780456, -17.7292221004], [-156.5235002454, -17.9346667006], [-156.2827224452, -18.1401113008], [-156.041944645, -18.345555901], [-155.75277797833, -18.536944568], [-155.46361131167, -18.728333235], [-155.174444645, -18.919721902], [-154.9900001445, -19.088471902], [-154.805555644, -19.257221902], [-154.99524314425, -19.52576365225], [-155.1849306445, -19.7943054025], [-155.37461814475, -20.06284715275], [-155.564305645, -20.331388903], [-155.75399314525, -20.59993065325], [-155.9436806455, -20.8684724035], [-156.13336814575, -21.13701415375], [-156.323055646, -21.405555904], [-156.3050000459, -21.7544448043], [-156.2869444458, -22.1033337046], [-156.2688888457, -22.4522226049], [-156.2508332456, -22.8011115052], [-156.2327776455, -23.1500004055], [-156.2147220454, -23.4988893058], [-156.1966664453, -23.8477782061], [-156.1786108452, -24.1966671064], [-156.1605552451, -24.5455560067], [-156.142499645, -24.894444907], [-156.066154645, -24.907163907], [-156.049384645, -24.911793907], [-156.042695645, -24.914875907], [-155.736032645, -24.9988444075], [-155.429369645, -25.082812908], [-155.348167645, -25.091425908], [-155.273746645, -25.162853908], [-155.0158471445, -25.335659408], [-154.757947644, -25.508464908], [-154.469479644, -25.637202908], [-154.181011644, -25.765940908], [-153.8711816435, -25.846399908], [-153.561351643, -25.926858908], [-153.558849643, -25.927094908], [-153.554192643, -25.928292908], [-153.522958643, -25.931224908], [-153.494764643, -25.938472908], [-153.490154643, -25.938903908], [-153.488602643, -25.939302908], [-153.1674351425, -25.968682408], [-152.846267642, -25.998061908], [-152.845109642, -25.997983908], [-152.844215642, -25.998063908], [-152.522327142, -25.975520908], [-152.200438642, -25.952977908], [-151.934084641, -25.890387908], [-151.857158641, -25.960362908], [-151.592984641, -26.1276809085], [-151.328810641, -26.294998909], [-151.327487641, -26.295554909], [-151.325773641, -26.296633909], [-151.0319806405, -26.419160909], [-150.73818764, -26.541687909], [-150.42422114, -26.615422409], [-150.11025464, -26.689156909], [-150, -26.696883824], [-150, -26.369131327249], [-150, -26.041378830497], [-150, -25.713626333746], [-150, -25.385873836994], [-150, -25.058121340242], [-150, -24.730368843491], [-150, -24.402616346739], [-150, -24.074863849988], [-150, -23.747111353236], [-150, -23.419358856485], [-150, -23.091606359733], [-150, -22.763853862981], [-150, -22.43610136623], [-150, -22.108348869478], [-150, -21.780596372727], [-150, -21.452843875975], [-150, -21.125091379223], [-150, -20.797338882472], [-150, -20.46958638572], [-150, -20.141833888969], [-150, -19.814081392217], [-150, -19.486328895466], [-150, -19.158576398714], [-150, -18.830823901962], [-150, -18.503071405211], [-150, -18.175318908459], [-150, -17.847566411708], [-150, -17.519813914956], [-150, -17.192061418205], [-150, -16.864308921453], [-150, -16.536556424701], [-150, -16.20880392795], [-150, -15.881051431198], [-150, -15.553298934447], [-150, -15.225546437695], [-150, -14.897793940943], [-150, -14.570041444192], [-150, -14.24228894744], [-150, -13.914536450689], [-150, -13.586783953937], [-150, -13.259031457186], [-150, -12.931278960434],
                ],
            ],
        ];
    }
}

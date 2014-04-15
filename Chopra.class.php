<?php

/*
 * Class to generate fake Deepak Chopra-style quotes
 *
 * @author Tom Williamson skepticcanary.com
 */
class Chopra {

    public $a = array(
        array(
            "The universe",
            "Your consciousness",
            "Quantum physics",
            "The unpredictable",
            "The unexplainable",
            "Our consciousness",
            "The soul",
            "Eternal stillness",
            "The cosmos",
            "Your desire",
            "Intuition",
            "Imagination",
            "Orderliness",
            "Wholeness",
            "The invisible",
            "Your body",
            "Awareness",
            "Perception",
            "God",
            "Knowledge",
            "Greatness",
            "Nature",
            "Your movement",
            "Everything",
            "Freedom",
            "Infinity",
            "Culture",
            "Perceptual reality",
            "Evolution",
            "Existence",
            "The ego",
            "Interdependence",
            "The world",
            "The mind",
            "Hidden meaning",
            "Love",
            "Good health",
            "The future",
            "Self power",
            "The web of life",
            "Your heart",
            "The secret of the universe",
            "Information",
            "Death",
            "Each of us",
            "Emotional intelligence",
            "Experiential truth",
            "The Higgs boson",
            "Qualia",
            "The future",
            "Non-judgment",
            "The human nervous system",
            "The physical world",
	    "Making tea",
	    "The key to joy",
	    "Innocence"
        ),
        array(
            "relies on",
            "depends on",
            "embraces",
            "requires",
            "illuminates",
            "is the ground of",
            "creates",
            "inspires",
            "nurtures",
            "heals",
            "gives rise to",
            "is rooted in",
            "arises and subsides in",
            "projects onto",
            "explores",
            "is the wisdom of",
            "is inherent in",
            "is the path to",
            "experiences",
            "comprehends",
            "explains",
            "is beyond",
            "transcends",
            "is the continuity of",
            "regulates",
            "meditates on",
            "serves",
            "is inside",
            "is in the midst of",
            "shapes",
            "transforms",
            "undertakes",
            "fascinates",
            "influences",
            "expresses",
            "opens",
            "is reborn in",
            "is an ingredient of",
            "unfolds into",
            "constructs",
            "differentiates into",
            "is only possible in",
            "grows through",
            "exists as",
            "reflects",
            "belongs to",
            "quiets",
            "imparts reality to",
	    "is the foundation of",
	    "alleviates",
	    "is at the heart of",
	    "compliments",
	    "corresponds to",
	    "results from"
        ),
        array(
            "your own",
            "infinite",
            "self-righteous",
            "unbridled",
            "cosmic",
            "unique",
            "visible",
            "great",
            "boundless",
            "quantum",
            "an abundance of",
            "subtle",
            "humble",
            "universal",
            "an expression of",
            "intrinsic",
            "ephemeral",
            "total",
            "reckless",
            "pure",
            "positive",
            "the expansion of",
            "the mechanics of",
            "the doorway to",
            "a symphony of",
            "irrational",
            "essential",
            "spontaneous",
            "karmic",
            "deep",
            "unparalleled",
            "incredible",
            "the flow of",
            "mortal",
            "potential",
            "the barrier of",
            "exponential",
            "descriptions of",
            "intricate",
            "new",
            "existential",
            "the light of",
            "precious",
            "subjective",
            "immortal",
            "species specific",
            "a jumble of",
            "dimensionless",
            "the progressive expansion of",
	    "formless",
	    "total acceptance of",
	    "innumerable"
        ),
        array(
            "joy",
            "creativity",
            "life",
            "possibilities",
            "sensations",
            "experiences",
            "energy",
            "happiness",
            "reality",
            "knowledge",
            "facts",
            "space time events",
            "opportunities",
            "sexual energy",
            "chaos",
            "truth",
            "destiny",
            "success",
            "choices",
            "acceptance",
            "silence",
            "positivity",
            "excellence",
            "belonging",
            "abstract beauty",
            "balance",
            "fulfillment",
            "bliss",
            "actions",
            "potentiality",
            "mysteries",
            "marvel",
            "external reality",
            "self-knowledge",
            "photons",
            "mortality",
            "timelessness",
            "force fields",
            "brightness",
            "neural networks",
            "human observation",
            "love",
	    "boundaries",
	    "brains",
	    "phenomena",
	    "miracles",
	    "observations"
        )
    );
    public $life1 = array(
        "Dogs",
        "Cats",
        "Mice",
        "Rats",
        "Elephants",
        "Kittens"
    );
    public $life2 = array(
        "insects",
        "horses",
        "llamas",
        "mules",
        "birds",
        "sterile",
        "plants"
    );

    public function getQuote() {
        $rn = rand(0, 100);
        // slight chance of making an animal based quote
        if ($rn < 2) {
            return $this->life1[array_rand($this->life1)] . " are " . $this->life2[array_rand($this->life2)];
        } else {
            $oa = array();
            if (isset($_SESSION)){
                // store the variables in the session, reload them if need be
                $i = 0;
                foreach ($this->a as $ar){
                    $i++;
                    $is = "s".strval($i);
                    if (!isset($_SESSION[$is])){
                        $_SESSION[$is] = $ar;
                    } elseif(empty($_SESSION[$is])){
                        $_SESSION[$is] = $ar;
                    }
                    shuffle($_SESSION[$is]);
                    $oa[] = array_pop($_SESSION[$is]);
                }
            } else {
                foreach ($this->a as $ar) {
                    $oa[] = $ar[array_rand($ar)];
                }
            }
            return implode(" ", $oa);
        }
    }

}

?>

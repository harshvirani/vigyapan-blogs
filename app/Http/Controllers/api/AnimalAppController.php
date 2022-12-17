<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;

class AnimalAppController extends Controller
{
    public function getSoundList(){
        $data = json_decode(
            '{
    "data": [
        {
            "title": "Birds",
            "items": [
                {
                    "title": "ara",
                    "image": "assets/images/animals_ara.webp",
                    "tone": "http://www.animal-sounds.org/farm/Bassett%20hound%20barking%20animals045.wav"
                },
                {
                    "title": "cuckoo",
                    "image": "assets/images/animals_cuckoo.webp",
                    "tone": "https://www.mboxdrive.com/animals_cuckoo.mp3"
                },
                {
                    "title": "nightingale",
                    "image": "assets/images/animals_nightingale.webp",
                    "tone": "https://www.mboxdrive.com/animals_nightingale.mp3"
                },
                {
                    "title": "rooster",
                    "image": "assets/images/animals_rooster.webp",
                    "tone": "https://www.mboxdrive.com/animals_rooster.mp3"
                },
                {
                    "title": "laughing kukaburra",
                    "image": "assets/images/animals_kookaburra.webp",
                    "tone": "https://www.mboxdrive.com/animals_kookaburra.mp3"
                },
                {
                    "title": "canary",
                    "image": "assets/images/animals_canary.webp",
                    "tone": "https://www.mboxdrive.com/animals_canary.mp3"
                },
                {
                    "title": "woodpecker",
                    "image": "assets/images/animals_woodpecker.webp",
                    "tone": "https://www.mboxdrive.com/animals_woodpecker.mp3"
                },
                {
                    "title": "musician wren",
                    "image": "assets/images/animals_musician_wren.webp",
                    "tone": "https://www.mboxdrive.com/animals_musician_wren.mp3"
                },
                {
                    "title": " pigeon",
                    "image": "assets/images/animals_pigeon.webp",
                    "tone": "https://www.mboxdrive.com/animals_pigeon.mp3"
                },
                {
                    "title": "asian koel",
                    "image": "assets/images/animals_asian_koel.webp",
                    "tone": "https://www.mboxdrive.com/animals_asian_koel.mp3"
                },
                {
                    "title": "duck",
                    "image": "assets/images/animals_duck.webp",
                    "tone": "https://www.mboxdrive.com/animals_duck.mp3"
                },
                {
                    "title": "goose",
                    "image": "assets/images/animals_goose.webp",
                    "tone": "https://www.mboxdrive.com/animals_goose.mp3"
                },
                {
                    "title": "wild duck",
                    "image": "assets/images/animals_wild_duck.webp",
                    "tone": "https://www.mboxdrive.com/animals_wild_duck.mp3"
                },
                {
                    "title": "white\'s thrush",
                    "image": "assets/images/animals_white_thrush.webp",
                    "tone": "https://www.mboxdrive.com/animals_white_thrush.mp3"
                },
{
"title": "toucan",
"image": "assets/images/animals_toucan.webp",
"tone": "https://www.mboxdrive.com/animals_toucan.mp3"
},
{
    "title": "swan",
                    "image": "assets/images/animals_swan.webp",
                    "tone": "https://www.mboxdrive.com/animals_swan.mp3"
                },
{
    "title": "seagull",
                    "image": "assets/images/animals_seagull.webp",
                    "tone": "https://www.mboxdrive.com/animals_seagull.mp3"
                },
{
    "title": "raven",
                    "image": "assets/images/animals_raven.webp",
                    "tone": "https://www.mboxdrive.com/animals_raven.mp3"
                },
{
    "title": "pelican",
                    "image": "assets/images/animals_pelican.webp",
                    "tone": "https://www.mboxdrive.com/animals_pelican.mp3"
                },
{
    "title": "quail",
                    "image": "assets/images/animals_quail.webp",
                    "tone": "https://www.mboxdrive.com/animals_quail.mp3"
                },
{
    "title": "eagle",
                    "image": "assets/images/animals_eagle.webp",
                    "tone": "https://www.mboxdrive.com/animals_eagle.mp3"
                },
{
    "title": "wild goose",
                    "image": "assets/images/animals_wild_goose.webp",
                    "tone": "https://www.mboxdrive.com/animals_wild_goose.mp3"
                },
{
    "title": "emu",
                    "image": "assets/images/animals_emu.webp",
                    "tone": "https://www.mboxdrive.com/animals_emu.mp3"
                },
{
    "title": "stork",
                    "image": "assets/images/animals_stork.webp",
                    "tone": "https://www.mboxdrive.com/animals_stork.mp3"
                },
{
    "title": "peacock",
                    "image": "assets/images/animals_peacock.webp",
                    "tone": "https://www.mboxdrive.com/animals_peacock.mp3"
                },
{
    "title": "turkey",
                    "image": "assets/images/animals_turkey.webp",
                    "tone": "https://www.mboxdrive.com/animals_turkey.mp3"
                },
{
    "title": "hooded crow",
                    "image": "assets/images/animals_hooded_crow.webp",
                    "tone": "https://www.mboxdrive.com/animals_hooded_crow.mp3"
                },
{
    "title": "flamingo",
                    "image": "assets/images/animals_flamingo.webp",
                    "tone": "https://www.mboxdrive.com/animals_flamingo.mp3"
                },
{
    "title": "heron",
                    "image": "assets/images/animals_heron.webp",
                    "tone": "https://www.mboxdrive.com/animals_heron.mp3"
                },
{
    "title": "bullfinch",
                    "image": "assets/images/animals_bullfinch.webp",
                    "tone": "https://www.mboxdrive.com/animals_bullfinch.mp3"
                },
{
    "title": "ibis",
                    "image": "assets/images/animals_ibis.webp",
                    "tone": "https://www.mboxdrive.com/animals_ibis.mp3"
                },
{
    "title": "blackbird",
                    "image": "assets/images/animals_blackbird.webp",
                    "tone": "https://www.mboxdrive.com/animals_blackbird.mp3"
                },
{
    "title": "ostrich",
                    "image": "assets/images/animals_ostrich.webp",
                    "tone": "https://www.mboxdrive.com/animals_ostrich.mp3"
                },
{
    "title": "cassowary",
                    "image": "assets/images/animals_cassowary.webp",
                    "tone": "https://www.mboxdrive.com/animals_cassowary.mp3"
                },
{
    "title": "hoopoe",
                    "image": "assets/images/animals_hoopoe.webp",
                    "tone": "https://www.mboxdrive.com/animals_hoopoe.mp3"
                },
{
    "title": "penguin",
                    "image": "assets/images/animals_penguin.webp",
                    "tone": "https://www.mboxdrive.com/animals_penguin.mp3"
                },
{
    "title": "magpie",
                    "image": "assets/images/animals_magpie.webp",
                    "tone": "https://www.mboxdrive.com/animals_magpie.mp3"
                },
{
    "title": "vulture",
                    "image": "assets/images/animals_vulture.webp",
                    "tone": "https://www.mboxdrive.com/animals_vulture.mp3"
                },
{
    "title": "hen",
                    "image": "assets/images/animals_hen.webp",
                    "tone": "https://www.mboxdrive.com/animals_hen.mp3"
                },
{
    "title": "puffin",
                    "image": "assets/images/animals_puffin.webp",
                    "tone": "https://www.mboxdrive.com/animals_puffin.mp3"
                },
{
    "title": "tit",
                    "image": "assets/images/animals_tit.webp",
                    "tone": "https://www.mboxdrive.com/animals_tit.mp3"
                },
{
    "title": "budgerigar",
                    "image": "assets/images/animals_budgerigar.webp",
                    "tone": "https://www.mboxdrive.com/animals_budgerigar.mp3"
                },
{
    "title": "guineafowl",
                    "image": "assets/images/animals_guineafowl.webp",
                    "tone": "https://www.mboxdrive.com/animals_guineafowl.mp3"
                },
{
    "title": "jay",
                    "image": "assets/images/animals_jay.webp",
                    "tone": "https://www.mboxdrive.com/animals_jay.mp3"
                },
{
    "title": "crane",
                    "image": "assets/images/animals_crane.webp",
                    "tone": "https://www.mboxdrive.com/animals_crane.mp3"
                },
{
    "title": "grebe",
                    "image": "assets/images/animals_grebe.webp",
                    "tone": "https://www.mboxdrive.com/animals_grebe.mp3"
                },
{
    "title": "cockatoo",
                    "image": "assets/images/animals_cockatoo.webp",
                    "tone": "https://www.mboxdrive.com/animals_cockatoo.mp3"
                },
{
    "title": "robin",
                    "image": "assets/images/animals_robin.webp",
                    "tone": "https://www.mboxdrive.com/animals_robin.mp3"
                },
{
    "title": "falcon",
                    "image": "assets/images/animals_falcon.webp",
                    "tone": "https://www.mboxdrive.com/animals_falcon.mp3"
                },
{
    "title": "goldfinch",
                    "image": "assets/images/animals_goldfinch.webp",
                    "tone": "https://www.mboxdrive.com/animals_goldfinch.mp3"
                },
{
    "title": "rufous bellied thrush",
                    "image": "assets/images/animals_rufous_bellied_thrush.webp",
                    "tone": "https://www.mboxdrive.com/animals_rufous_bellied_thrush.mp3"
                },
{
    "title": "blyth\'s tragopan",
                    "image": "assets/images/animals_blyth_tragopan.webp",
                    "tone": "https://www.mboxdrive.com/animals_blyth_tragopan.mp3"
                },
{
    "title": "campo troupial",
                    "image": "assets/images/animals_campo_troupial.webp",
                    "tone": "https://www.mboxdrive.com/animals_campo_troupial.mp3"
                },
{
    "title": "lined seedeater",
                    "image": "assets/images/animals_lined_seedeater.webp",
                    "tone": "https://www.mboxdrive.com/animals_lined_seedeater.mp3"
                },
{
    "title": "tui",
                    "image": "assets/images/animals_tui.webp",
                    "tone": "https://www.mboxdrive.com/animals_tui.mp3"
                },
{
    "title": "great jacamar",
                    "image": "assets/images/animals_great_jacamar.webp",
                    "tone": "https://www.mboxdrive.com/animals_great_jacamar.mp3"
                },
{
    "title": "eastern nicator",
                    "image": "assets/images/animals_eastern_nicator.webp",
                    "tone": "https://www.mboxdrive.com/animals_eastern_nicator.mp3"
                },
{
    "title": "common chaffinch",
                    "image": "assets/images/animals_common_chaffinch.webp",
                    "tone": "https://www.mboxdrive.com/animals_common_chaffinch.mp3"
                },
{
    "title": "chick",
                    "image": "assets/images/animals_chick.webp",
                    "tone": "https://www.mboxdrive.com/animals_chick.mp3"
                },
{
    "title": "veery",
                    "image": "assets/images/animals_veery.webp",
                    "tone": "https://www.mboxdrive.com/animals_veery.mp3"
                },
{
    "title": "rhinoceros hornbill",
                    "image": "assets/images/animals_rhinoceros_hornbill.webp",
                    "tone": "https://www.mboxdrive.com/animals_rhinoceros_hornbill.mp3"
                },
{
    "title": "common loon",
                    "image": "assets/images/animals_common_loon.webp",
                    "tone": "https://www.mboxdrive.com/animals_common_loon.mp3"
                },
{
    "title": "cockatiel",
                    "image": "assets/images/animals_cockatiel.webp",
                    "tone": "https://www.mboxdrive.com/animals_cockatiel.mp3"
                },
{
    "title": "zebra finch",
                    "image": "assets/images/animals_zebra_finch.webp",
                    "tone": "https://www.mboxdrive.com/animals_zebra_finch.mp3"
                },
{
    "title": "tenefife chaffinch",
                    "image": "assets/images/animals_tenefife_chaffinch.webp",
                    "tone": "https://www.mboxdrive.com/animals_tenefife_chaffinch.mp3"
                },
{
    "title": "song thrush",
                    "image": "assets/images/animals_song_thrush.webp",
                    "tone": "https://www.mboxdrive.com/animals_song_thrush.mp3"
                },
{
    "title": "barn swallow",
                    "image": "assets/images/animals_barn_swallow.webp",
                    "tone": "https://www.mboxdrive.com/animals_barn_swallow.mp3"
                },
{
    "title": "northern goshawk",
                    "image": "assets/images/animals_northern_goshawk.webp",
                    "tone": "https://www.mboxdrive.com/animals_northern_goshawk.mp3"
                }
]
},
{
    "title": "Farm animals",
            "items": [
                {
                    "title": "dog",
                    "image": "assets/images/animals_dog.webp",
                    "tone": "https://www.mboxdrive.com/animals_dog.mp3"
                },
                {
                    "title": "cat",
                    "image": "assets/images/animals_cat.webp",
                    "tone": "https://www.mboxdrive.com/animals_cat.mp3"
                },
                {
                    "title": "horse",
                    "image": "assets/images/animals_horse.webp",
                    "tone": "https://www.mboxdrive.com/animals_horse.mp3"
                },
                {
                    "title": "cow",
                    "image": "assets/images/animals_cow.webp",
                    "tone": "https://www.mboxdrive.com/animals_cow.mp3"
                },
                {
                    "title": "rooster",
                    "image": "assets/images/animals_rooster.webp",
                    "tone": "https://www.mboxdrive.com/animals_rooster.mp3"
                },
                {
                    "title": "pig",
                    "image": "assets/images/animals_pig.webp",
                    "tone": "https://www.mboxdrive.com/animals_pig.mp3"
                },
                {
                    "title": "donkey",
                    "image": "assets/images/animals_donkey.webp",
                    "tone": "https://www.mboxdrive.com/animals_donkey.mp3"
                },
                {
                    "title": "sheep",
                    "image": "assets/images/animals_sheep.webp",
                    "tone": "https://www.mboxdrive.com/animals_sheep.mp3"
                },
                {
                    "title": "duck",
                    "image": "assets/images/animals_duck.webp",
                    "tone": "https://www.mboxdrive.com/animals_duck.mp3"
                },
                {
                    "title": "goose",
                    "image": "assets/images/animals_goose.webp",
                    "tone": "https://www.mboxdrive.com/animals_goose.mp3"
                },
                {
                    "title": "goat",
                    "image": "assets/images/animals_goat.webp",
                    "tone": "https://www.mboxdrive.com/animals_goat.mp3"
                },
                {
                    "title": "quail",
                    "image": "assets/images/animals_quail.webp",
                    "tone": "https://www.mboxdrive.com/animals_quail.mp3"
                },
                {
                    "title": "turkey",
                    "image": "assets/images/animals_turkey.webp",
                    "tone": "https://www.mboxdrive.com/animals_turkey.mp3"
                },
                {
                    "title": "hen",
                    "image": "assets/images/animals_hen.webp",
                    "tone": "https://www.mboxdrive.com/animals_hen.mp3"
                },
                {
                    "title": "guinea pig",
                    "image": "assets/images/animals_guinea_pig.webp",
                    "tone": "https://www.mboxdrive.com/animals_guinea_pig.mp3"
                },
                {
                    "title": "budgerigar",
                    "image": "assets/images/animals_budgerigar.webp",
                    "tone": "https://www.mboxdrive.com/animals_budgerigar.mp3"
                },
                {
                    "title": "bull",
                    "image": "assets/images/animals_bull.webp",
                    "tone": "https://www.mboxdrive.com/animals_bull.mp3"
                },
                {
                    "title": "guineafowl",
                    "image": "assets/images/animals_guineafowl.webp",
                    "tone": "https://www.mboxdrive.com/animals_guineafowl.mp3"
                },
                {
                    "title": "coypu",
                    "image": "assets/images/animals_coypu.webp",
                    "tone": "https://www.mboxdrive.com/animals_coypu.mp3"
                },
                {
                    "title": "zebu",
                    "image": "assets/images/animals_zebu.webp",
                    "tone": "https://www.mboxdrive.com/animals_zebu.mp3"
                },
                {
                    "title": "lama",
                    "image": "assets/images/animals_lama.webp",
                    "tone": "https://www.mboxdrive.com/animals_lama.mp3"
                },
                {
                    "title": "chick",
                    "image": "assets/images/animals_chick.webp",
                    "tone": "https://www.mboxdrive.com/animals_chick.mp3"
                },
                {
                    "title": "rabbit",
                    "image": "assets/images/animals_rabbit.webp",
                    "tone": "https://www.mboxdrive.com/animals_rabbit.mp3"
                },
                {
                    "title": "alpaka",
                    "image": "assets/images/animals_alpaka.webp",
                    "tone": "https://www.mboxdrive.com/animals_alpaka.mp3"
                }
            ]
        },
{
    "title": "Wild animals",
            "items": [
                {
                    "title": "orangutan",
                    "image": "assets/images/animals_orangutan.webp",
                    "tone": "https://www.mboxdrive.com/animals_orangutan.mp3"
                },
                {
                    "title": "lion",
                    "image": "assets/images/animals_lion.webp",
                    "tone": "https://www.mboxdrive.com/animals_lion.mp3"
                },
                {
                    "title": "elephant",
                    "image": "assets/images/animals_elephant.webp",
                    "tone": "https://www.mboxdrive.com/animals_elephant.mp3"
                },
                {
                    "title": "hippo",
                    "image": "assets/images/animals_hippo.webp",
                    "tone": "https://www.mboxdrive.com/animals_hippo.mp3"
                },
                {
                    "title": "dolphin",
                    "image": "assets/images/animals_dolphin.webp",
                    "tone": "https://www.mboxdrive.com/animals_dolphin.mp3"
                },
                {
                    "title": "kangaroo",
                    "image": "assets/images/animals_kangaroo.webp",
                    "tone": "https://www.mboxdrive.com/animals_kangaroo.mp3"
                },
                {
                    "title": "gorilla",
                    "image": "assets/images/animals_gorilla.webp",
                    "tone": "https://www.mboxdrive.com/animals_gorilla.mp3"
                },
                {
                    "title": "giraffe",
                    "image": "assets/images/animals_giraffe.webp",
                    "tone": "https://www.mboxdrive.com/animals_giraffe.mp3"
                },
                {
                    "title": "frog",
                    "image": "assets/images/animals_frog.webp",
                    "tone": "https://www.mboxdrive.com/animals_frog.mp3"
                },
                {
                    "title": "rhinoceros",
                    "image": "assets/images/animals_rhinoceros.webp",
                    "tone": "https://www.mboxdrive.com/animals_rhinoceros.mp3"
                },
                {
                    "title": "wolf",
                    "image": "assets/images/animals_wolf.webp",
                    "tone": "https://www.mboxdrive.com/animals_wolf.mp3"
                },
                {
                    "title": "cuckoo",
                    "image": "assets/images/animals_cuckoo.webp",
                    "tone": "https://www.mboxdrive.com/animals_cuckoo.mp3"
                },
                {
                    "title": "mouse",
                    "image": "assets/images/animals_mouse.webp",
                    "tone": "https://www.mboxdrive.com/animals_mouse.mp3"
                },
                {
                    "title": "squirrel",
                    "image": "assets/images/animals_squirrel.webp",
                    "tone": "https://www.mboxdrive.com/animals_squirrel.mp3"
                },
                {
                    "title": "fox",
                    "image": "assets/images/animals_fox.webp",
                    "tone": "https://www.mboxdrive.com/animals_fox.mp3"
                },
                {
                    "title": "zebra",
                    "image": "assets/images/animals_zebra.webp",
                    "tone": "https://www.mboxdrive.com/animals_zebra.mp3"
                },
                {
                    "title": "nightingale",
                    "image": "assets/images/animals_nightingale.webp",
                    "tone": "https://www.mboxdrive.com/animals_nightingale.mp3"
                },
                {
                    "title": "laughing kukaburra",
                    "image": "assets/images/animals_kookaburra.webp",
                    "tone": "https://www.mboxdrive.com/animals_kookaburra.mp3"
                },
                {
                    "title": "canary",
                    "image": "assets/images/animals_canary.webp",
                    "tone": "https://www.mboxdrive.com/animals_canary.mp3"
                },
                {
                    "title": "woodpecker",
                    "image": "assets/images/animals_woodpecker.webp",
                    "tone": "https://www.mboxdrive.com/animals_woodpecker.mp3"
                },
                {
                    "title": "tiger",
                    "image": "assets/images/animals_tiger.webp",
                    "tone": "https://www.mboxdrive.com/animals_tiger.mp3"
                },
                {
                    "title": "seal",
                    "image": "assets/images/animals_seal.webp",
                    "tone": "https://www.mboxdrive.com/animals_seal.mp3"
                },
                {
                    "title": "musician wren",
                    "image": "assets/images/animals_musician_wren.webp",
                    "tone": "https://www.mboxdrive.com/animals_musician_wren.mp3"
                },
                {
                    "title": "antelope",
                    "image": "assets/images/animals_antelope.webp",
                    "tone": "https://www.mboxdrive.com/animals_antelope.mp3"
                },
                {
                    "title": "owl",
                    "image": "assets/images/animals_owl.webp",
                    "tone": "https://www.mboxdrive.com/animals_owl.mp3"
                },
                {
                    "title": "boar",
                    "image": "assets/images/animals_boar.webp",
                    "tone": "https://www.mboxdrive.com/animals_boar.mp3"
                },
                {
                    "title": " pigeon",
                    "image": "assets/images/animals_pigeon.webp",
                    "tone": "https://www.mboxdrive.com/animals_pigeon.mp3"
                },
                {
                    "title": "asian koel",
                    "image": "assets/images/animals_asian_koel.webp",
                    "tone": "https://www.mboxdrive.com/animals_asian_koel.mp3"
                },
                {
                    "title": "sparrow",
                    "image": "assets/images/animals_sparrow.webp",
                    "tone": "https://www.mboxdrive.com/animals_sparrow.mp3"
                },
                {
                    "title": "cheetah",
                    "image": "assets/images/animals_cheetah.webp",
                    "tone": "https://www.mboxdrive.com/animals_cheetah.mp3"
                },
                {
                    "title": "camel",
                    "image": "assets/images/animals_camel.webp",
                    "tone": "https://www.mboxdrive.com/animals_camel.mp3"
                },
                {
                    "title": "crocodile",
                    "image": "assets/images/animals_crocodile.webp",
                    "tone": "https://www.mboxdrive.com/animals_crocodile.mp3"
                },
                {
                    "title": "wild duck",
                    "image": "assets/images/animals_wild_duck.webp",
                    "tone": "https://www.mboxdrive.com/animals_wild_duck.mp3"
                },
                {
                    "title": "fly",
                    "image": "assets/images/animals_fly.webp",
                    "tone": "https://www.mboxdrive.com/animals_fly.mp3"
                },
                {
                    "title": "white\'s thrush",
                    "image": "assets/images/animals_white_thrush.webp",
                    "tone": "https://www.mboxdrive.com/animals_white_thrush.mp3"
                },
                {
                    "title": "polar bear",
                    "image": "assets/images/animals_polar_bear.webp",
                    "tone": "https://www.mboxdrive.com/animals_polar_bear.mp3"
                },
                {
                    "title": "koala",
                    "image": "assets/images/animals_koala.webp",
                    "tone": "https://www.mboxdrive.com/animals_koala.mp3"
                },
                {
                    "title": "swan",
                    "image": "assets/images/animals_swan.webp",
                    "tone": "https://www.mboxdrive.com/animals_swan.mp3"
                },
                {
                    "title": "seagull",
                    "image": "assets/images/animals_seagull.webp",
                    "tone": "https://www.mboxdrive.com/animals_seagull.mp3"
                },
                {
                    "title": "bear",
                    "image": "assets/images/animals_bear.webp",
                    "tone": "https://www.mboxdrive.com/animals_bear.mp3"
                },
                {
                    "title": "deer",
                    "image": "assets/images/animals_deer.webp",
                    "tone": "https://www.mboxdrive.com/animals_deer.mp3"
                },
                {
                    "title": "giant panda",
                    "image": "assets/images/animals_giant_panda.webp",
                    "tone": "https://www.mboxdrive.com/animals_giant_panda.mp3"
                },
                {
                    "title": "raven",
                    "image": "assets/images/animals_raven.webp",
                    "tone": "https://www.mboxdrive.com/animals_raven.mp3"
                },
                {
                    "title": "snake",
                    "image": "assets/images/animals_snake.webp",
                    "tone": "https://www.mboxdrive.com/animals_snake.mp3"
                },
                {
                    "title": "pelican",
                    "image": "assets/images/animals_pelican.webp",
                    "tone": "https://www.mboxdrive.com/animals_pelican.mp3"
                },
                {
                    "title": "yak",
                    "image": "assets/images/animals_yak.webp",
                    "tone": "https://www.mboxdrive.com/animals_yak.mp3"
                },
                {
                    "title": "quail",
                    "image": "assets/images/animals_quail.webp",
                    "tone": "https://www.mboxdrive.com/animals_quail.mp3"
                },
                {
                    "title": "moose",
                    "image": "assets/images/animals_moose.webp",
                    "tone": "https://www.mboxdrive.com/animals_moose.mp3"
                },
                {
                    "title": "eagle",
                    "image": "assets/images/animals_eagle.webp",
                    "tone": "https://www.mboxdrive.com/animals_eagle.mp3"
                },
                {
                    "title": "wild goose",
                    "image": "assets/images/animals_wild_goose.webp",
                    "tone": "https://www.mboxdrive.com/animals_wild_goose.mp3"
                },
                {
                    "title": "emu",
                    "image": "assets/images/animals_emu.webp",
                    "tone": "https://www.mboxdrive.com/animals_emu.mp3"
                },
                {
                    "title": "marmot",
                    "image": "assets/images/animals_marmot.webp",
                    "tone": "https://www.mboxdrive.com/animals_marmot.mp3"
                },
                {
                    "title": "bat",
                    "image": "assets/images/animals_bat.webp",
                    "tone": "https://www.mboxdrive.com/animals_bat.mp3"
                },
                {
                    "title": "stork",
                    "image": "assets/images/animals_stork.webp",
                    "tone": "https://www.mboxdrive.com/animals_stork.mp3"
                },
                {
                    "title": "whale",
                    "image": "assets/images/animals_whale.webp",
                    "tone": "https://www.mboxdrive.com/animals_whale.mp3"
                },
                {
                    "title": "lemur",
                    "image": "assets/images/animals_lemur.webp",
                    "tone": "https://www.mboxdrive.com/animals_lemur.mp3"
                },
                {
                    "title": "grasshopper",
                    "image": "assets/images/animals_grasshopper.webp",
                    "tone": "https://www.mboxdrive.com/animals_grasshopper.mp3"
                },
                {
                    "title": "hooded crow",
                    "image": "assets/images/animals_hooded_crow.webp",
                    "tone": "https://www.mboxdrive.com/animals_hooded_crow.mp3"
                },
                {
                    "title": "bison",
                    "image": "assets/images/animals_bison.webp",
                    "tone": "https://www.mboxdrive.com/animals_bison.mp3"
                },
                {
                    "title": "flamingo",
                    "image": "assets/images/animals_flamingo.webp",
                    "tone": "https://www.mboxdrive.com/animals_flamingo.mp3"
                },
                {
                    "title": "beaver",
                    "image": "assets/images/animals_beaver.webp",
                    "tone": "https://www.mboxdrive.com/animals_beaver.mp3"
                },
                {
                    "title": "heron",
                    "image": "assets/images/animals_heron.webp",
                    "tone": "https://www.mboxdrive.com/animals_heron.mp3"
                },
                {
                    "title": "hyena",
                    "image": "assets/images/animals_hyena.webp",
                    "tone": "https://www.mboxdrive.com/animals_hyena.mp3"
                },
                {
                    "title": "bullfinch",
                    "image": "assets/images/animals_bullfinch.webp",
                    "tone": "https://www.mboxdrive.com/animals_bullfinch.mp3"
                },
                {
                    "title": "ibis",
                    "image": "assets/images/animals_ibis.webp",
                    "tone": "https://www.mboxdrive.com/animals_ibis.mp3"
                },
                {
                    "title": "lynx",
                    "image": "assets/images/animals_lynx.webp",
                    "tone": "https://www.mboxdrive.com/animals_lynx.mp3"
                },
                {
                    "title": "blackbird",
                    "image": "assets/images/animals_blackbird.webp",
                    "tone": "https://www.mboxdrive.com/animals_blackbird.mp3"
                },
                {
                    "title": "reindeer",
                    "image": "assets/images/animals_reindeer.webp",
                    "tone": "https://www.mboxdrive.com/animals_reindeer.mp3"
                },
                {
                    "title": "ostrich",
                    "image": "assets/images/animals_ostrich.webp",
                    "tone": "https://www.mboxdrive.com/animals_ostrich.mp3"
                },
                {
                    "title": "raccoon",
                    "image": "assets/images/animals_raccoon.webp",
                    "tone": "https://www.mboxdrive.com/animals_raccoon.mp3"
                },
                {
                    "title": "coyote",
                    "image": "assets/images/animals_coyote.webp",
                    "tone": "https://www.mboxdrive.com/animals_coyote.mp3"
                },
                {
                    "title": "anteater",
                    "image": "assets/images/animals_anteater.webp",
                    "tone": "https://www.mboxdrive.com/animals_anteater.mp3"
                },
                {
                    "title": "skunk",
                    "image": "assets/images/animals_skunk.webp",
                    "tone": "https://www.mboxdrive.com/animals_skunk.mp3"
                },
                {
                    "title": "sloth",
                    "image": "assets/images/animals_sloth.webp",
                    "tone": "https://www.mboxdrive.com/animals_sloth.mp3"
                },
                {
                    "title": "porcupine",
                    "image": "assets/images/animals_porcupine.webp",
                    "tone": "https://www.mboxdrive.com/animals_porcupine.mp3"
                },
                {
                    "title": "komodo dragon",
                    "image": "assets/images/animals_komodo_dragon.webp",
                    "tone": "https://www.mboxdrive.com/animals_komodo_dragon.mp3"
                },
                {
                    "title": "cassowary",
                    "image": "assets/images/animals_cassowary.webp",
                    "tone": "https://www.mboxdrive.com/animals_cassowary.mp3"
                },
                {
                    "title": "beluga",
                    "image": "assets/images/animals_beluga.webp",
                    "tone": "https://www.mboxdrive.com/animals_beluga.mp3"
                },
                {
                    "title": "hoopoe",
                    "image": "assets/images/animals_hoopoe.webp",
                    "tone": "https://www.mboxdrive.com/animals_hoopoe.mp3"
                },
                {
                    "title": "chimpanzee",
                    "image": "assets/images/animals_chimpanzee.webp",
                    "tone": "https://www.mboxdrive.com/animals_chimpanzee.mp3"
                },
                {
                    "title": "penguin",
                    "image": "assets/images/animals_penguin.webp",
                    "tone": "https://www.mboxdrive.com/animals_penguin.mp3"
                },
                {
                    "title": "walrus",
                    "image": "assets/images/animals_walrus.webp",
                    "tone": "https://www.mboxdrive.com/animals_walrus.mp3"
                },
                {
                    "title": "orca",
                    "image": "assets/images/animals_orca.webp",
                    "tone": "https://www.mboxdrive.com/animals_orca.mp3"
                },
                {
                    "title": "magpie",
                    "image": "assets/images/animals_magpie.webp",
                    "tone": "https://www.mboxdrive.com/animals_magpie.mp3"
                },
                {
                    "title": "vulture",
                    "image": "assets/images/animals_vulture.webp",
                    "tone": "https://www.mboxdrive.com/animals_vulture.mp3"
                },
                {
                    "title": "puma",
                    "image": "assets/images/animals_puma.webp",
                    "tone": "https://www.mboxdrive.com/animals_puma.mp3"
                },
                {
                    "title": "chameleon",
                    "image": "assets/images/animals_chameleon.webp",
                    "tone": "https://www.mboxdrive.com/animals_chameleon.mp3"
                },
                {
                    "title": "puffin",
                    "image": "assets/images/animals_puffin.webp",
                    "tone": "https://www.mboxdrive.com/animals_puffin.mp3"
                },
                {
                    "title": "leopard",
                    "image": "assets/images/animals_leopard.webp",
                    "tone": "https://www.mboxdrive.com/animals_leopard.mp3"
                },
                {
                    "title": "mole",
                    "image": "assets/images/animals_mole.webp",
                    "tone": "https://www.mboxdrive.com/animals_mole.mp3"
                },
                {
                    "title": "tit",
                    "image": "assets/images/animals_tit.webp",
                    "tone": "https://www.mboxdrive.com/animals_tit.mp3"
                },
                {
                    "title": "bumblebee",
                    "image": "assets/images/animals_bumblebee.webp",
                    "tone": "https://www.mboxdrive.com/animals_bumblebee.mp3"
                },
                {
                    "title": "meerkat",
                    "image": "assets/images/animals_meerkat.webp",
                    "tone": "https://www.mboxdrive.com/animals_meerkat.mp3"
                },
                {
                    "title": "budgerigar",
                    "image": "assets/images/animals_budgerigar.webp",
                    "tone": "https://www.mboxdrive.com/animals_budgerigar.mp3"
                },
                {
                    "title": "jackal",
                    "image": "assets/images/animals_jackal.webp",
                    "tone": "https://www.mboxdrive.com/animals_jackal.mp3"
                },
                {
                    "title": "red panda",
                    "image": "assets/images/animals_red_panda.webp",
                    "tone": "https://www.mboxdrive.com/animals_red_panda.mp3"
                },
                {
                    "title": "guineafowl",
                    "image": "assets/images/animals_guineafowl.webp",
                    "tone": "https://www.mboxdrive.com/animals_guineafowl.mp3"
                },
                {
                    "title": "pheasant",
                    "image": "assets/images/animals_pheasant.webp",
                    "tone": "https://www.mboxdrive.com/animals_pheasant.mp3"
                },
                {
                    "title": "jaguar",
                    "image": "assets/images/animals_jaguar.webp",
                    "tone": "https://www.mboxdrive.com/animals_jaguar.mp3"
                },
                {
                    "title": "jay",
                    "image": "assets/images/animals_jay.webp",
                    "tone": "https://www.mboxdrive.com/animals_jay.mp3"
                },
                {
                    "title": "baboon",
                    "image": "assets/images/animals_baboon.webp",
                    "tone": "https://www.mboxdrive.com/animals_baboon.mp3"
                },
                {
                    "title": "crane",
                    "image": "assets/images/animals_crane.webp",
                    "tone": "https://www.mboxdrive.com/animals_crane.mp3"
                },
                {
                    "title": "macaque",
                    "image": "assets/images/animals_macaque.webp",
                    "tone": "https://www.mboxdrive.com/animals_macaque.mp3"
                },
                {
                    "title": "turtle",
                    "image": "assets/images/animals_turtle.webp",
                    "tone": "https://www.mboxdrive.com/animals_turtle.mp3"
                },
                {
                    "title": "armadillo",
                    "image": "assets/images/animals_armadillo.webp",
                    "tone": "https://www.mboxdrive.com/animals_armadillo.mp3"
                },
                {
                    "title": "gibbon",
                    "image": "assets/images/animals_gibbon.webp",
                    "tone": "https://www.mboxdrive.com/animals_gibbon.mp3"
                },
                {
                    "title": "coypu",
                    "image": "assets/images/animals_coypu.webp",
                    "tone": "https://www.mboxdrive.com/animals_coypu.mp3"
                },
                {
                    "title": "grebe",
                    "image": "assets/images/animals_grebe.webp",
                    "tone": "https://www.mboxdrive.com/animals_grebe.mp3"
                },
                {
                    "title": "cockatoo",
                    "image": "assets/images/animals_cockatoo.webp",
                    "tone": "https://www.mboxdrive.com/animals_cockatoo.mp3"
                },
                {
                    "title": "lama",
                    "image": "assets/images/animals_lama.webp",
                    "tone": "https://www.mboxdrive.com/animals_lama.mp3"
                },
                {
                    "title": "robin",
                    "image": "assets/images/animals_robin.webp",
                    "tone": "https://www.mboxdrive.com/animals_robin.mp3"
                },
                {
                    "title": "falcon",
                    "image": "assets/images/animals_falcon.webp",
                    "tone": "https://www.mboxdrive.com/animals_falcon.mp3"
                },
                {
                    "title": "goldfinch",
                    "image": "assets/images/animals_goldfinch.webp",
                    "tone": "https://www.mboxdrive.com/animals_goldfinch.mp3"
                },
                {
                    "title": "rufous bellied thrush",
                    "image": "assets/images/animals_rufous_bellied_thrush.webp",
                    "tone": "https://www.mboxdrive.com/animals_rufous_bellied_thrush.mp3"
                },
                {
                    "title": "blyth\'s tragopan",
                    "image": "assets/images/animals_blyth_tragopan.webp",
                    "tone": "https://www.mboxdrive.com/animals_blyth_tragopan.mp3"
                },
                {
                    "title": "campo troupial",
                    "image": "assets/images/animals_campo_troupial.webp",
                    "tone": "https://www.mboxdrive.com/animals_campo_troupial.mp3"
                },
                {
                    "title": "lined seedeater",
                    "image": "assets/images/animals_lined_seedeater.webp",
                    "tone": "https://www.mboxdrive.com/animals_lined_seedeater.mp3"
                },
                {
                    "title": "tui",
                    "image": "assets/images/animals_tui.webp",
                    "tone": "https://www.mboxdrive.com/animals_tui.mp3"
                },
                {
                    "title": "great jacamar",
                    "image": "assets/images/animals_great_jacamar.webp",
                    "tone": "https://www.mboxdrive.com/animals_great_jacamar.mp3"
                },
                {
                    "title": "eastern nicator",
                    "image": "assets/images/animals_eastern_nicator.webp",
                    "tone": "https://www.mboxdrive.com/animals_eastern_nicator.mp3"
                },
                {
                    "title": "common chaffinch",
                    "image": "assets/images/animals_common_chaffinch.webp",
                    "tone": "https://www.mboxdrive.com/animals_common_chaffinch.mp3"
                },
                {
                    "title": "veery",
                    "image": "assets/images/animals_veery.webp",
                    "tone": "https://www.mboxdrive.com/animals_veery.mp3"
                },
                {
                    "title": "elk",
                    "image": "assets/images/animals_elk.webp",
                    "tone": "https://www.mboxdrive.com/animals_elk.mp3"
                },
                {
                    "title": "cricket",
                    "image": "assets/images/animals_cricket.webp",
                    "tone": "https://www.mboxdrive.com/animals_cricket.mp3"
                },
                {
                    "title": "rhinoceros hornbill",
                    "image": "assets/images/animals_rhinoceros_hornbill.webp",
                    "tone": "https://www.mboxdrive.com/animals_rhinoceros_hornbill.mp3"
                },
                {
                    "title": "warthog",
                    "image": "assets/images/animals_warthog.webp",
                    "tone": "https://www.mboxdrive.com/animals_warthog.mp3"
                },
                {
                    "title": "rat",
                    "image": "assets/images/animals_rat.webp",
                    "tone": "https://www.mboxdrive.com/animals_rat.mp3"
                },
                {
                    "title": "common loon",
                    "image": "assets/images/animals_common_loon.webp",
                    "tone": "https://www.mboxdrive.com/animals_common_loon.mp3"
                },
                {
                    "title": "gecko",
                    "image": "assets/images/animals_gecko.webp",
                    "tone": "https://www.mboxdrive.com/animals_gecko.mp3"
                },
                {
                    "title": "proboscis monkey",
                    "image": "assets/images/animals_proboscis_monkey.webp",
                    "tone": "https://www.mboxdrive.com/animals_proboscis_monkey.mp3"
                },
                {
                    "title": "cockatiel",
                    "image": "assets/images/animals_cockatiel.webp",
                    "tone": "https://www.mboxdrive.com/animals_cockatiel.mp3"
                },
                {
                    "title": "zebra finch",
                    "image": "assets/images/animals_zebra_finch.webp",
                    "tone": "https://www.mboxdrive.com/animals_zebra_finch.mp3"
                },
                {
                    "title": "tenefife chaffinch",
                    "image": "assets/images/animals_tenefife_chaffinch.webp",
                    "tone": "https://www.mboxdrive.com/animals_tenefife_chaffinch.mp3"
                },
                {
                    "title": "song thrush",
                    "image": "assets/images/animals_song_thrush.webp",
                    "tone": "https://www.mboxdrive.com/animals_song_thrush.mp3"
                },
                {
                    "title": "capybara",
                    "image": "assets/images/animals_capybara.webp",
                    "tone": "https://www.mboxdrive.com/animals_capybara.mp3"
                },
                {
                    "title": "roe",
                    "image": "assets/images/animals_roe.webp",
                    "tone": "https://www.mboxdrive.com/animals_roe.mp3"
                },
                {
                    "title": "cicadas",
                    "image": "assets/images/animals_cicadas.webp",
                    "tone": "https://www.mboxdrive.com/animals_cicadas.mp3"
                },
                {
                    "title": "barn swallow",
                    "image": "assets/images/animals_barn_swallow.webp",
                    "tone": "https://www.mboxdrive.com/animals_barn_swallow.mp3"
                },
                {
                    "title": "northern goshawk",
                    "image": "assets/images/animals_northern_goshawk.webp",
                    "tone": "https://www.mboxdrive.com/animals_northern_goshawk.mp3"
                },
                {
                    "title": "tasmanian devil",
                    "image": "assets/images/animals_tasmanian_devil.webp",
                    "tone": "https://www.mboxdrive.com/animals_tasmanian_devil.mp3"
                },
                {
                    "title": "ferret",
                    "image": "assets/images/animals_ferret.webp",
                    "tone": "https://www.mboxdrive.com/animals_ferret.mp3"
                },
                {
                    "title": "buffalo",
                    "image": "assets/images/animals_buffalo.webp",
                    "tone": "https://www.mboxdrive.com/animals_buffalo.mp3"
                },
                {
                    "title": "otter",
                    "image": "assets/images/animals_otter.webp",
                    "tone": "https://www.mboxdrive.com/animals_otter.mp3"
                },
                {
                    "title": "mongoose",
                    "image": "assets/images/animals_mongoose.webp",
                    "tone": "https://www.mboxdrive.com/animals_mongoose.mp3"
                }
            ]
        },
{
    "title": "Pet animals",
            "items": [
                {
                    "title": "dog",
                    "image": "assets/images/animals_dog.webp",
                    "tone": "https://www.mboxdrive.com/animals_dog.mp3"
                },
                {
                    "title": "cat",
                    "image": "assets/images/animals_cat.webp",
                    "tone": "https://www.mboxdrive.com/animals_cat.mp3"
                },
                {
                    "title": "mouse",
                    "image": "assets/images/animals_mouse.webp",
                    "tone": "https://www.mboxdrive.com/animals_mouse.mp3"
                },
                {
                    "title": "canary",
                    "image": "assets/images/animals_canary.webp",
                    "tone": "https://www.mboxdrive.com/animals_canary.mp3"
                },
                {
                    "title": "guinea pig",
                    "image": "assets/images/animals_guinea_pig.webp",
                    "tone": "https://www.mboxdrive.com/animals_guinea_pig.mp3"
                },
                {
                    "title": "budgerigar",
                    "image": "assets/images/animals_budgerigar.webp",
                    "tone": "https://www.mboxdrive.com/animals_budgerigar.mp3"
                },
                {
                    "title": "turtle",
                    "image": "assets/images/animals_turtle.webp",
                    "tone": "https://www.mboxdrive.com/animals_turtle.mp3"
                },
                {
                    "title": "rabbit",
                    "image": "assets/images/animals_rabbit.webp",
                    "tone": "https://www.mboxdrive.com/animals_rabbit.mp3"
                },
                {
                    "title": "hamster",
                    "image": "assets/images/animals_hamster.webp",
                    "tone": "https://www.mboxdrive.com/animals_hamster.mp3"
                },
                {
                    "title": "rat",
                    "image": "assets/images/animals_rat.webp",
                    "tone": "https://www.mboxdrive.com/animals_rat.mp3"
                },
                {
                    "title": "cockatiel",
                    "image": "assets/images/animals_cockatiel.webp",
                    "tone": "https://www.mboxdrive.com/animals_cockatiel.mp3"
                },
                {
                    "title": "zebra finch",
                    "image": "assets/images/animals_zebra_finch.webp",
                    "tone": "https://www.mboxdrive.com/animals_zebra_finch.mp3"
                },
                {
                    "title": "ferret",
                    "image": "assets/images/animals_ferret.webp",
                    "tone": "https://www.mboxdrive.com/animals_ferret.mp3"
                }
            ]
        },
{
    "title": "Mammals",
            "items": [
                {
                    "title": "orangutan",
                    "image": "assets/images/animals_orangutan.webp",
                    "tone": "https://www.mboxdrive.com/animals_orangutan.mp3"
                },
                {
                    "title": "lion",
                    "image": "assets/images/animals_lion.webp",
                    "tone": "https://www.mboxdrive.com/animals_lion.mp3"
                },
                {
                    "title": "elephant",
                    "image": "assets/images/animals_elephant.webp",
                    "tone": "https://www.mboxdrive.com/animals_elephant.mp3"
                },
                {
                    "title": "hippo",
                    "image": "assets/images/animals_hippo.webp",
                    "tone": "https://www.mboxdrive.com/animals_hippo.mp3"
                },
                {
                    "title": "dolphin",
                    "image": "assets/images/animals_dolphin.webp",
                    "tone": "https://www.mboxdrive.com/animals_dolphin.mp3"
                },
                {
                    "title": "kangaroo",
                    "image": "assets/images/animals_kangaroo.webp",
                    "tone": "https://www.mboxdrive.com/animals_kangaroo.mp3"
                },
                {
                    "title": "gorilla",
                    "image": "assets/images/animals_gorilla.webp",
                    "tone": "https://www.mboxdrive.com/animals_gorilla.mp3"
                },
                {
                    "title": "rhinoceros",
                    "image": "assets/images/animals_rhinoceros.webp",
                    "tone": "https://www.mboxdrive.com/animals_rhinoceros.mp3"
                },
                {
                    "title": "wolf",
                    "image": "assets/images/animals_wolf.webp",
                    "tone": "https://www.mboxdrive.com/animals_wolf.mp3"
                },
                {
                    "title": "dog",
                    "image": "assets/images/animals_dog.webp",
                    "tone": "https://www.mboxdrive.com/animals_dog.mp3"
                },
                {
                    "title": "cat",
                    "image": "assets/images/animals_cat.webp",
                    "tone": "https://www.mboxdrive.com/animals_cat.mp3"
                },
                {
                    "title": "horse",
                    "image": "assets/images/animals_horse.webp",
                    "tone": "https://www.mboxdrive.com/animals_horse.mp3"
                },
                {
                    "title": "mouse",
                    "image": "assets/images/animals_mouse.webp",
                    "tone": "https://www.mboxdrive.com/animals_mouse.mp3"
                },
                {
                    "title": "squirrel",
                    "image": "assets/images/animals_squirrel.webp",
                    "tone": "https://www.mboxdrive.com/animals_squirrel.mp3"
                },
                {
                    "title": "fox",
                    "image": "assets/images/animals_fox.webp",
                    "tone": "https://www.mboxdrive.com/animals_fox.mp3"
                },
                {
                    "title": "cow",
                    "image": "assets/images/animals_cow.webp",
                    "tone": "https://www.mboxdrive.com/animals_cow.mp3"
                },
                {
                    "title": "zebra",
                    "image": "assets/images/animals_zebra.webp",
                    "tone": "https://www.mboxdrive.com/animals_zebra.mp3"
                },
                {
                    "title": "tiger",
                    "image": "assets/images/animals_tiger.webp",
                    "tone": "https://www.mboxdrive.com/animals_tiger.mp3"
                },
                {
                    "title": "seal",
                    "image": "assets/images/animals_seal.webp",
                    "tone": "https://www.mboxdrive.com/animals_seal.mp3"
                },
                {
                    "title": "pig",
                    "image": "assets/images/animals_pig.webp",
                    "tone": "https://www.mboxdrive.com/animals_pig.mp3"
                },
                {
                    "title": "donkey",
                    "image": "assets/images/animals_donkey.webp",
                    "tone": "https://www.mboxdrive.com/animals_donkey.mp3"
                },
                {
                    "title": "antelope",
                    "image": "assets/images/animals_antelope.webp",
                    "tone": "https://www.mboxdrive.com/animals_antelope.mp3"
                },
                {
                    "title": "boar",
                    "image": "assets/images/animals_boar.webp",
                    "tone": "https://www.mboxdrive.com/animals_boar.mp3"
                },
                {
                    "title": "sheep",
                    "image": "assets/images/animals_sheep.webp",
                    "tone": "https://www.mboxdrive.com/animals_sheep.mp3"
                },
                {
                    "title": "goat",
                    "image": "assets/images/animals_goat.webp",
                    "tone": "https://www.mboxdrive.com/animals_goat.mp3"
                },
                {
                    "title": "cheetah",
                    "image": "assets/images/animals_cheetah.webp",
                    "tone": "https://www.mboxdrive.com/animals_cheetah.mp3"
                },
                {
                    "title": "camel",
                    "image": "assets/images/animals_camel.webp",
                    "tone": "https://www.mboxdrive.com/animals_camel.mp3"
                },
                {
                    "title": "polar bear",
                    "image": "assets/images/animals_polar_bear.webp",
                    "tone": "https://www.mboxdrive.com/animals_polar_bear.mp3"
                },
                {
                    "title": "koala",
                    "image": "assets/images/animals_koala.webp",
                    "tone": "https://www.mboxdrive.com/animals_koala.mp3"
                },
                {
                    "title": "bear",
                    "image": "assets/images/animals_bear.webp",
                    "tone": "https://www.mboxdrive.com/animals_bear.mp3"
                },
                {
                    "title": "deer",
                    "image": "assets/images/animals_deer.webp",
                    "tone": "https://www.mboxdrive.com/animals_deer.mp3"
                },
                {
                    "title": "giant panda",
                    "image": "assets/images/animals_giant_panda.webp",
                    "tone": "https://www.mboxdrive.com/animals_giant_panda.mp3"
                },
                {
                    "title": "yak",
                    "image": "assets/images/animals_yak.webp",
                    "tone": "https://www.mboxdrive.com/animals_yak.mp3"
                },
                {
                    "title": "moose",
                    "image": "assets/images/animals_moose.webp",
                    "tone": "https://www.mboxdrive.com/animals_moose.mp3"
                },
                {
                    "title": "marmot",
                    "image": "assets/images/animals_marmot.webp",
                    "tone": "https://www.mboxdrive.com/animals_marmot.mp3"
                },
                {
                    "title": "bat",
                    "image": "assets/images/animals_bat.webp",
                    "tone": "https://www.mboxdrive.com/animals_bat.mp3"
                },
                {
                    "title": "whale",
                    "image": "assets/images/animals_whale.webp",
                    "tone": "https://www.mboxdrive.com/animals_whale.mp3"
                },
                {
                    "title": "lemur",
                    "image": "assets/images/animals_lemur.webp",
                    "tone": "https://www.mboxdrive.com/animals_lemur.mp3"
                },
                {
                    "title": "bison",
                    "image": "assets/images/animals_bison.webp",
                    "tone": "https://www.mboxdrive.com/animals_bison.mp3"
                },
                {
                    "title": "beaver",
                    "image": "assets/images/animals_beaver.webp",
                    "tone": "https://www.mboxdrive.com/animals_beaver.mp3"
                },
                {
                    "title": "hyena",
                    "image": "assets/images/animals_hyena.webp",
                    "tone": "https://www.mboxdrive.com/animals_hyena.mp3"
                },
                {
                    "title": "lynx",
                    "image": "assets/images/animals_lynx.webp",
                    "tone": "https://www.mboxdrive.com/animals_lynx.mp3"
                },
                {
                    "title": "reindeer",
                    "image": "assets/images/animals_reindeer.webp",
                    "tone": "https://www.mboxdrive.com/animals_reindeer.mp3"
                },
                {
                    "title": "raccoon",
                    "image": "assets/images/animals_raccoon.webp",
                    "tone": "https://www.mboxdrive.com/animals_raccoon.mp3"
                },
                {
                    "title": "coyote",
                    "image": "assets/images/animals_coyote.webp",
                    "tone": "https://www.mboxdrive.com/animals_coyote.mp3"
                },
                {
                    "title": "anteater",
                    "image": "assets/images/animals_anteater.webp",
                    "tone": "https://www.mboxdrive.com/animals_anteater.mp3"
                },
                {
                    "title": "skunk",
                    "image": "assets/images/animals_skunk.webp",
                    "tone": "https://www.mboxdrive.com/animals_skunk.mp3"
                },
                {
                    "title": "sloth",
                    "image": "assets/images/animals_sloth.webp",
                    "tone": "https://www.mboxdrive.com/animals_sloth.mp3"
                },
                {
                    "title": "porcupine",
                    "image": "assets/images/animals_porcupine.webp",
                    "tone": "https://www.mboxdrive.com/animals_porcupine.mp3"
                },
                {
                    "title": "beluga",
                    "image": "assets/images/animals_beluga.webp",
                    "tone": "https://www.mboxdrive.com/animals_beluga.mp3"
                },
                {
                    "title": "chimpanzee",
                    "image": "assets/images/animals_chimpanzee.webp",
                    "tone": "https://www.mboxdrive.com/animals_chimpanzee.mp3"
                },
                {
                    "title": "walrus",
                    "image": "assets/images/animals_walrus.webp",
                    "tone": "https://www.mboxdrive.com/animals_walrus.mp3"
                },
                {
                    "title": "orca",
                    "image": "assets/images/animals_orca.webp",
                    "tone": "https://www.mboxdrive.com/animals_orca.mp3"
                },
                {
                    "title": "puma",
                    "image": "assets/images/animals_puma.webp",
                    "tone": "https://www.mboxdrive.com/animals_puma.mp3"
                },
                {
                    "title": "leopard",
                    "image": "assets/images/animals_leopard.webp",
                    "tone": "https://www.mboxdrive.com/animals_leopard.mp3"
                },
                {
                    "title": "mole",
                    "image": "assets/images/animals_mole.webp",
                    "tone": "https://www.mboxdrive.com/animals_mole.mp3"
                },
                {
                    "title": "meerkat",
                    "image": "assets/images/animals_meerkat.webp",
                    "tone": "https://www.mboxdrive.com/animals_meerkat.mp3"
                },
                {
                    "title": "hedgehog",
                    "image": "assets/images/animals_hedgehog.webp",
                    "tone": "https://www.mboxdrive.com/animals_hedgehog.mp3"
                },
                {
                    "title": "guinea pig",
                    "image": "assets/images/animals_guinea_pig.webp",
                    "tone": "https://www.mboxdrive.com/animals_guinea_pig.mp3"
                },
                {
                    "title": "jackal",
                    "image": "assets/images/animals_jackal.webp",
                    "tone": "https://www.mboxdrive.com/animals_jackal.mp3"
                },
                {
                    "title": "red panda",
                    "image": "assets/images/animals_red_panda.webp",
                    "tone": "https://www.mboxdrive.com/animals_red_panda.mp3"
                },
                {
                    "title": "bull",
                    "image": "assets/images/animals_bull.webp",
                    "tone": "https://www.mboxdrive.com/animals_bull.mp3"
                },
                {
                    "title": "jaguar",
                    "image": "assets/images/animals_jaguar.webp",
                    "tone": "https://www.mboxdrive.com/animals_jaguar.mp3"
                },
                {
                    "title": "baboon",
                    "image": "assets/images/animals_baboon.webp",
                    "tone": "https://www.mboxdrive.com/animals_baboon.mp3"
                },
                {
                    "title": "macaque",
                    "image": "assets/images/animals_macaque.webp",
                    "tone": "https://www.mboxdrive.com/animals_macaque.mp3"
                },
                {
                    "title": "armadillo",
                    "image": "assets/images/animals_armadillo.webp",
                    "tone": "https://www.mboxdrive.com/animals_armadillo.mp3"
                },
                {
                    "title": "gibbon",
                    "image": "assets/images/animals_gibbon.webp",
                    "tone": "https://www.mboxdrive.com/animals_gibbon.mp3"
                },
                {
                    "title": "coypu",
                    "image": "assets/images/animals_coypu.webp",
                    "tone": "https://www.mboxdrive.com/animals_coypu.mp3"
                },
                {
                    "title": "zebu",
                    "image": "assets/images/animals_zebu.webp",
                    "tone": "https://www.mboxdrive.com/animals_zebu.mp3"
                },
                {
                    "title": "lama",
                    "image": "assets/images/animals_lama.webp",
                    "tone": "https://www.mboxdrive.com/animals_lama.mp3"
                },
                {
                    "title": "elk",
                    "image": "assets/images/animals_elk.webp",
                    "tone": "https://www.mboxdrive.com/animals_elk.mp3"
                },
                {
                    "title": "warthog",
                    "image": "assets/images/animals_warthog.webp",
                    "tone": "https://www.mboxdrive.com/animals_warthog.mp3"
                },
                {
                    "title": "rabbit",
                    "image": "assets/images/animals_rabbit.webp",
                    "tone": "https://www.mboxdrive.com/animals_rabbit.mp3"
                },
                {
                    "title": "hamster",
                    "image": "assets/images/animals_hamster.webp",
                    "tone": "https://www.mboxdrive.com/animals_hamster.mp3"
                },
                {
                    "title": "rat",
                    "image": "assets/images/animals_rat.webp",
                    "tone": "https://www.mboxdrive.com/animals_rat.mp3"
                },
                {
                    "title": "alpaka",
                    "image": "assets/images/animals_alpaka.webp",
                    "tone": "https://www.mboxdrive.com/animals_alpaka.mp3"
                },
                {
                    "title": "proboscis monkey",
                    "image": "assets/images/animals_proboscis_monkey.webp",
                    "tone": "https://www.mboxdrive.com/animals_proboscis_monkey.mp3"
                },
                {
                    "title": "capybara",
                    "image": "assets/images/animals_capybara.webp",
                    "tone": "https://www.mboxdrive.com/animals_capybara.mp3"
                },
                {
                    "title": "roe",
                    "image": "assets/images/animals_roe.webp",
                    "tone": "https://www.mboxdrive.com/animals_roe.mp3"
                },
                {
                    "title": "tasmanian devil",
                    "image": "assets/images/animals_tasmanian_devil.webp",
                    "tone": "https://www.mboxdrive.com/animals_tasmanian_devil.mp3"
                },
                {
                    "title": "ferret",
                    "image": "assets/images/animals_ferret.webp",
                    "tone": "https://www.mboxdrive.com/animals_ferret.mp3"
                },
                {
                    "title": "buffalo",
                    "image": "assets/images/animals_buffalo.webp",
                    "tone": "https://www.mboxdrive.com/animals_buffalo.mp3"
                },
                {
                    "title": "otter",
                    "image": "assets/images/animals_otter.webp",
                    "tone": "https://www.mboxdrive.com/animals_otter.mp3"
                },
                {
                    "title": "mongoose",
                    "image": "assets/images/animals_mongoose.webp",
                    "tone": "https://www.mboxdrive.com/animals_mongoose.mp3"
                }
            ]
        },
{
    "title": "Reptiles and Amphibians",
            "items": [
                {
                    "title": "frog",
                    "image": "assets/images/animals_frog.webp",
                    "tone": "https://www.mboxdrive.com/animals_frog.mp3"
                },
                {
                    "title": "crocodile",
                    "image": "assets/images/animals_crocodile.webp",
                    "tone": "https://www.mboxdrive.com/animals_crocodile.mp3"
                },
                {
                    "title": "snake",
                    "image": "assets/images/animals_snake.webp",
                    "tone": "https://www.mboxdrive.com/animals_snake.mp3"
                },
                {
                    "title": "komodo dragon",
                    "image": "assets/images/animals_komodo_dragon.webp",
                    "tone": "https://www.mboxdrive.com/animals_komodo_dragon.mp3"
                },
                {
                    "title": "chameleon",
                    "image": "assets/images/animals_chameleon.webp",
                    "tone": "https://www.mboxdrive.com/animals_chameleon.mp3"
                },
                {
                    "title": "turtle",
                    "image": "assets/images/animals_turtle.webp",
                    "tone": "https://www.mboxdrive.com/animals_turtle.mp3"
                },
                {
                    "title": "gecko",
                    "image": "assets/images/animals_gecko.webp",
                    "tone": "https://www.mboxdrive.com/animals_gecko.mp3"
                }
            ]
        },
{
    "title": "Insects",
            "items": [
                {
                    "title": "mosquito",
                    "image": "assets/images/animals_mosquito.webp",
                    "tone": "https://www.mboxdrive.com/animals_mosquito.mp3"
                },
                {
                    "title": "bee",
                    "image": "assets/images/animals_bee.webp",
                    "tone": "https://www.mboxdrive.com/animals_bee.mp3"
                },
                {
                    "title": "fly",
                    "image": "assets/images/animals_fly.webp",
                    "tone": "https://www.mboxdrive.com/animals_fly.mp3"
                },
                {
                    "title": "grasshopper",
                    "image": "assets/images/animals_grasshopper.webp",
                    "tone": "https://www.mboxdrive.com/animals_grasshopper.mp3"
                },
                {
                    "title": "wasp",
                    "image": "assets/images/animals_wasp.webp",
                    "tone": "https://www.mboxdrive.com/animals_wasp.mp3"
                },
                {
                    "title": "bumblebee",
                    "image": "assets/images/animals_bumblebee.webp",
                    "tone": "https://www.mboxdrive.com/animals_bumblebee.mp3"
                },
                {
                    "title": "cricket",
                    "image": "assets/images/animals_cricket.webp",
                    "tone": "https://www.mboxdrive.com/animals_cricket.mp3"
                },
                {
                    "title": "cicadas",
                    "image": "assets/images/animals_cicadas.webp",
                    "tone": "https://www.mboxdrive.com/animals_cicadas.mp3"
                }
            ]
        },
{
    "title": "Land animals",
            "items": [
                {
                    "title": "orangutan",
                    "image": "assets/images/animals_orangutan.webp",
                    "tone": "https://www.mboxdrive.com/animals_orangutan.mp3"
                },
                {
                    "title": "lion",
                    "image": "assets/images/animals_lion.webp",
                    "tone": "https://www.mboxdrive.com/animals_lion.mp3"
                },
                {
                    "title": "elephant",
                    "image": "assets/images/animals_elephant.webp",
                    "tone": "https://www.mboxdrive.com/animals_elephant.mp3"
                },
                {
                    "title": "kangaroo",
                    "image": "assets/images/animals_kangaroo.webp",
                    "tone": "https://www.mboxdrive.com/animals_kangaroo.mp3"
                },
                {
                    "title": "gorilla",
                    "image": "assets/images/animals_gorilla.webp",
                    "tone": "https://www.mboxdrive.com/animals_gorilla.mp3"
                },
                {
                    "title": "giraffe",
                    "image": "assets/images/animals_giraffe.webp",
                    "tone": "https://www.mboxdrive.com/animals_giraffe.mp3"
                },
                {
                    "title": "rhinoceros",
                    "image": "assets/images/animals_rhinoceros.webp",
                    "tone": "https://www.mboxdrive.com/animals_rhinoceros.mp3"
                },
                {
                    "title": "wolf",
                    "image": "assets/images/animals_wolf.webp",
                    "tone": "https://www.mboxdrive.com/animals_wolf.mp3"
                },
                {
                    "title": "dog",
                    "image": "assets/images/animals_dog.webp",
                    "tone": "https://www.mboxdrive.com/animals_dog.mp3"
                },
                {
                    "title": "cat",
                    "image": "assets/images/animals_cat.webp",
                    "tone": "https://www.mboxdrive.com/animals_cat.mp3"
                },
                {
                    "title": "mouse",
                    "image": "assets/images/animals_mouse.webp",
                    "tone": "https://www.mboxdrive.com/animals_mouse.mp3"
                },
                {
                    "title": "horse",
                    "image": "assets/images/animals_horse.webp",
                    "tone": "https://www.mboxdrive.com/animals_horse.mp3"
                },
                {
                    "title": "squirrel",
                    "image": "assets/images/animals_squirrel.webp",
                    "tone": "https://www.mboxdrive.com/animals_squirrel.mp3"
                },
                {
                    "title": "fox",
                    "image": "assets/images/animals_fox.webp",
                    "tone": "https://www.mboxdrive.com/animals_fox.mp3"
                },
                {
                    "title": "cow",
                    "image": "assets/images/animals_cow.webp",
                    "tone": "https://www.mboxdrive.com/animals_cow.mp3"
                },
                {
                    "title": "zebra",
                    "image": "assets/images/animals_zebra.webp",
                    "tone": "https://www.mboxdrive.com/animals_zebra.mp3"
                },
                {
                    "title": "rooster",
                    "image": "assets/images/animals_rooster.webp",
                    "tone": "https://www.mboxdrive.com/animals_rooster.mp3"
                },
                {
                    "title": "tiger",
                    "image": "assets/images/animals_tiger.webp",
                    "tone": "https://www.mboxdrive.com/animals_tiger.mp3"
                },
                {
                    "title": "pig",
                    "image": "assets/images/animals_pig.webp",
                    "tone": "https://www.mboxdrive.com/animals_pig.mp3"
                },
                {
                    "title": "donkey",
                    "image": "assets/images/animals_donkey.webp",
                    "tone": "https://www.mboxdrive.com/animals_donkey.mp3"
                },
                {
                    "title": "antelope",
                    "image": "assets/images/animals_antelope.webp",
                    "tone": "https://www.mboxdrive.com/animals_antelope.mp3"
                },
                {
                    "title": "boar",
                    "image": "assets/images/animals_boar.webp",
                    "tone": "https://www.mboxdrive.com/animals_boar.mp3"
                },
                {
                    "title": "sheep",
                    "image": "assets/images/animals_sheep.webp",
                    "tone": "https://www.mboxdrive.com/animals_sheep.mp3"
                },
                {
                    "title": "goat",
                    "image": "assets/images/animals_goat.webp",
                    "tone": "https://www.mboxdrive.com/animals_goat.mp3"
                },
                {
                    "title": "cheetah",
                    "image": "assets/images/animals_cheetah.webp",
                    "tone": "https://www.mboxdrive.com/animals_cheetah.mp3"
                },
                {
                    "title": "camel",
                    "image": "assets/images/animals_camel.webp",
                    "tone": "https://www.mboxdrive.com/animals_camel.mp3"
                },
                {
                    "title": "polar bear",
                    "image": "assets/images/animals_polar_bear.webp",
                    "tone": "https://www.mboxdrive.com/animals_polar_bear.mp3"
                },
                {
                    "title": "koala",
                    "image": "assets/images/animals_koala.webp",
                    "tone": "https://www.mboxdrive.com/animals_koala.mp3"
                },
                {
                    "title": "bear",
                    "image": "assets/images/animals_bear.webp",
                    "tone": "https://www.mboxdrive.com/animals_bear.mp3"
                },
                {
                    "title": "deer",
                    "image": "assets/images/animals_deer.webp",
                    "tone": "https://www.mboxdrive.com/animals_deer.mp3"
                },
                {
                    "title": "giant panda",
                    "image": "assets/images/animals_giant_panda.webp",
                    "tone": "https://www.mboxdrive.com/animals_giant_panda.mp3"
                },
                {
                    "title": "snake",
                    "image": "assets/images/animals_snake.webp",
                    "tone": "https://www.mboxdrive.com/animals_snake.mp3"
                },
                {
                    "title": "yak",
                    "image": "assets/images/animals_yak.webp",
                    "tone": "https://www.mboxdrive.com/animals_yak.mp3"
                },
                {
                    "title": "moose",
                    "image": "assets/images/animals_moose.webp",
                    "tone": "https://www.mboxdrive.com/animals_moose.mp3"
                },
                {
                    "title": "emu",
                    "image": "assets/images/animals_emu.webp",
                    "tone": "https://www.mboxdrive.com/animals_emu.mp3"
                },
                {
                    "title": "marmot",
                    "image": "assets/images/animals_marmot.webp",
                    "tone": "https://www.mboxdrive.com/animals_marmot.mp3"
                },
                {
                    "title": "lemur",
                    "image": "assets/images/animals_lemur.webp",
                    "tone": "https://www.mboxdrive.com/animals_lemur.mp3"
                },
                {
                    "title": "turkey",
                    "image": "assets/images/animals_turkey.webp",
                    "tone": "https://www.mboxdrive.com/animals_turkey.mp3"
                },
                {
                    "title": "grasshopper",
                    "image": "assets/images/animals_grasshopper.webp",
                    "tone": "https://www.mboxdrive.com/animals_grasshopper.mp3"
                },
                {
                    "title": "bison",
                    "image": "assets/images/animals_bison.webp",
                    "tone": "https://www.mboxdrive.com/animals_bison.mp3"
                },
                {
                    "title": "hyena",
                    "image": "assets/images/animals_hyena.webp",
                    "tone": "https://www.mboxdrive.com/animals_hyena.mp3"
                },
                {
                    "title": "lynx",
                    "image": "assets/images/animals_lynx.webp",
                    "tone": "https://www.mboxdrive.com/animals_lynx.mp3"
                },
                {
                    "title": "reindeer",
                    "image": "assets/images/animals_reindeer.webp",
                    "tone": "https://www.mboxdrive.com/animals_reindeer.mp3"
                },
                {
                    "title": "ostrich",
                    "image": "assets/images/animals_ostrich.webp",
                    "tone": "https://www.mboxdrive.com/animals_ostrich.mp3"
                },
                {
                    "title": "raccoon",
                    "image": "assets/images/animals_raccoon.webp",
                    "tone": "https://www.mboxdrive.com/animals_raccoon.mp3"
                },
                {
                    "title": "coyote",
                    "image": "assets/images/animals_coyote.webp",
                    "tone": "https://www.mboxdrive.com/animals_coyote.mp3"
                },
                {
                    "title": "anteater",
                    "image": "assets/images/animals_anteater.webp",
                    "tone": "https://www.mboxdrive.com/animals_anteater.mp3"
                },
                {
                    "title": "skunk",
                    "image": "assets/images/animals_skunk.webp",
                    "tone": "https://www.mboxdrive.com/animals_skunk.mp3"
                },
                {
                    "title": "sloth",
                    "image": "assets/images/animals_sloth.webp",
                    "tone": "https://www.mboxdrive.com/animals_sloth.mp3"
                },
                {
                    "title": "porcupine",
                    "image": "assets/images/animals_porcupine.webp",
                    "tone": "https://www.mboxdrive.com/animals_porcupine.mp3"
                },
                {
                    "title": "komodo dragon",
                    "image": "assets/images/animals_komodo_dragon.webp",
                    "tone": "https://www.mboxdrive.com/animals_komodo_dragon.mp3"
                },
                {
                    "title": "cassowary",
                    "image": "assets/images/animals_cassowary.webp",
                    "tone": "https://www.mboxdrive.com/animals_cassowary.mp3"
                },
                {
                    "title": "chimpanzee",
                    "image": "assets/images/animals_chimpanzee.webp",
                    "tone": "https://www.mboxdrive.com/animals_chimpanzee.mp3"
                },
                {
                    "title": "puma",
                    "image": "assets/images/animals_puma.webp",
                    "tone": "https://www.mboxdrive.com/animals_puma.mp3"
                },
                {
                    "title": "hen",
                    "image": "assets/images/animals_hen.webp",
                    "tone": "https://www.mboxdrive.com/animals_hen.mp3"
                },
                {
                    "title": "chameleon",
                    "image": "assets/images/animals_chameleon.webp",
                    "tone": "https://www.mboxdrive.com/animals_chameleon.mp3"
                },
                {
                    "title": "leopard",
                    "image": "assets/images/animals_leopard.webp",
                    "tone": "https://www.mboxdrive.com/animals_leopard.mp3"
                },
                {
                    "title": "mole",
                    "image": "assets/images/animals_mole.webp",
                    "tone": "https://www.mboxdrive.com/animals_mole.mp3"
                },
                {
                    "title": "meerkat",
                    "image": "assets/images/animals_meerkat.webp",
                    "tone": "https://www.mboxdrive.com/animals_meerkat.mp3"
                },
                {
                    "title": "hedgehog",
                    "image": "assets/images/animals_hedgehog.webp",
                    "tone": "https://www.mboxdrive.com/animals_hedgehog.mp3"
                },
                {
                    "title": "guinea pig",
                    "image": "assets/images/animals_guinea_pig.webp",
                    "tone": "https://www.mboxdrive.com/animals_guinea_pig.mp3"
                },
                {
                    "title": "jackal",
                    "image": "assets/images/animals_jackal.webp",
                    "tone": "https://www.mboxdrive.com/animals_jackal.mp3"
                },
                {
                    "title": "red panda",
                    "image": "assets/images/animals_red_panda.webp",
                    "tone": "https://www.mboxdrive.com/animals_red_panda.mp3"
                },
                {
                    "title": "bull",
                    "image": "assets/images/animals_bull.webp",
                    "tone": "https://www.mboxdrive.com/animals_bull.mp3"
                },
                {
                    "title": "guineafowl",
                    "image": "assets/images/animals_guineafowl.webp",
                    "tone": "https://www.mboxdrive.com/animals_guineafowl.mp3"
                },
                {
                    "title": "jaguar",
                    "image": "assets/images/animals_jaguar.webp",
                    "tone": "https://www.mboxdrive.com/animals_jaguar.mp3"
                },
                {
                    "title": "baboon",
                    "image": "assets/images/animals_baboon.webp",
                    "tone": "https://www.mboxdrive.com/animals_baboon.mp3"
                },
                {
                    "title": "macaque",
                    "image": "assets/images/animals_macaque.webp",
                    "tone": "https://www.mboxdrive.com/animals_macaque.mp3"
                },
                {
                    "title": "turtle",
                    "image": "assets/images/animals_turtle.webp",
                    "tone": "https://www.mboxdrive.com/animals_turtle.mp3"
                },
                {
                    "title": "armadillo",
                    "image": "assets/images/animals_armadillo.webp",
                    "tone": "https://www.mboxdrive.com/animals_armadillo.mp3"
                },
                {
                    "title": "gibbon",
                    "image": "assets/images/animals_gibbon.webp",
                    "tone": "https://www.mboxdrive.com/animals_gibbon.mp3"
                },
                {
                    "title": "zebu",
                    "image": "assets/images/animals_zebu.webp",
                    "tone": "https://www.mboxdrive.com/animals_zebu.mp3"
                },
                {
                    "title": "lama",
                    "image": "assets/images/animals_lama.webp",
                    "tone": "https://www.mboxdrive.com/animals_lama.mp3"
                },
                {
                    "title": "chick",
                    "image": "assets/images/animals_chick.webp",
                    "tone": "https://www.mboxdrive.com/animals_chick.mp3"
                },
                {
                    "title": "elk",
                    "image": "assets/images/animals_elk.webp",
                    "tone": "https://www.mboxdrive.com/animals_elk.mp3"
                },
                {
                    "title": "cricket",
                    "image": "assets/images/animals_cricket.webp",
                    "tone": "https://www.mboxdrive.com/animals_cricket.mp3"
                },
                {
                    "title": "warthog",
                    "image": "assets/images/animals_warthog.webp",
                    "tone": "https://www.mboxdrive.com/animals_warthog.mp3"
                },
                {
                    "title": "rabbit",
                    "image": "assets/images/animals_rabbit.webp",
                    "tone": "https://www.mboxdrive.com/animals_rabbit.mp3"
                },
                {
                    "title": "hamster",
                    "image": "assets/images/animals_hamster.webp",
                    "tone": "https://www.mboxdrive.com/animals_hamster.mp3"
                },
                {
                    "title": "rat",
                    "image": "assets/images/animals_rat.webp",
                    "tone": "https://www.mboxdrive.com/animals_rat.mp3"
                },
                {
                    "title": "alpaka",
                    "image": "assets/images/animals_alpaka.webp",
                    "tone": "https://www.mboxdrive.com/animals_alpaka.mp3"
                },
                {
                    "title": "gecko",
                    "image": "assets/images/animals_gecko.webp",
                    "tone": "https://www.mboxdrive.com/animals_gecko.mp3"
                },
                {
                    "title": "proboscis monkey",
                    "image": "assets/images/animals_proboscis_monkey.webp",
                    "tone": "https://www.mboxdrive.com/animals_proboscis_monkey.mp3"
                },
                {
                    "title": "roe",
                    "image": "assets/images/animals_roe.webp",
                    "tone": "https://www.mboxdrive.com/animals_roe.mp3"
                },
                {
                    "title": "tasmanian devil",
                    "image": "assets/images/animals_tasmanian_devil.webp",
                    "tone": "https://www.mboxdrive.com/animals_tasmanian_devil.mp3"
                },
                {
                    "title": "ferret",
                    "image": "assets/images/animals_ferret.webp",
                    "tone": "https://www.mboxdrive.com/animals_ferret.mp3"
                },
                {
                    "title": "buffalo",
                    "image": "assets/images/animals_buffalo.webp",
                    "tone": "https://www.mboxdrive.com/animals_buffalo.mp3"
                },
                {
                    "title": "mongoose",
                    "image": "assets/images/animals_mongoose.webp",
                    "tone": "https://www.mboxdrive.com/animals_mongoose.mp3"
                }
            ]
        },
{
    "title": "Water animals",
            "items": [
                {
                    "title": "dolphin",
                    "image": "assets/images/animals_dolphin.webp",
                    "tone": "https://www.mboxdrive.com/animals_dolphin.mp3"
                },
                {
                    "title": "seal",
                    "image": "assets/images/animals_seal.webp",
                    "tone": "https://www.mboxdrive.com/animals_seal.mp3"
                },
                {
                    "title": "wild duck",
                    "image": "assets/images/animals_wild_duck.webp",
                    "tone": "https://www.mboxdrive.com/animals_wild_duck.mp3"
                },
                {
                    "title": "swan",
                    "image": "assets/images/animals_swan.webp",
                    "tone": "https://www.mboxdrive.com/animals_swan.mp3"
                },
                {
                    "title": "pelican",
                    "image": "assets/images/animals_pelican.webp",
                    "tone": "https://www.mboxdrive.com/animals_pelican.mp3"
                },
                {
                    "title": "whale",
                    "image": "assets/images/animals_whale.webp",
                    "tone": "https://www.mboxdrive.com/animals_whale.mp3"
                },
                {
                    "title": "beluga",
                    "image": "assets/images/animals_beluga.webp",
                    "tone": "https://www.mboxdrive.com/animals_beluga.mp3"
                },
                {
                    "title": "penguin",
                    "image": "assets/images/animals_penguin.webp",
                    "tone": "https://www.mboxdrive.com/animals_penguin.mp3"
                },
                {
                    "title": "walrus",
                    "image": "assets/images/animals_walrus.webp",
                    "tone": "https://www.mboxdrive.com/animals_walrus.mp3"
                },
                {
                    "title": "orca",
                    "image": "assets/images/animals_orca.webp",
                    "tone": "https://www.mboxdrive.com/animals_orca.mp3"
                },
                {
                    "title": "grebe",
                    "image": "assets/images/animals_grebe.webp",
                    "tone": "https://www.mboxdrive.com/animals_grebe.mp3"
                },
                {
                    "title": "otter",
                    "image": "assets/images/animals_otter.webp",
                    "tone": "https://www.mboxdrive.com/animals_otter.mp3"
                }
            ]
        }
]
}',1
        );
        return response()->json($data);
    }
}

-- "value":"2",
--             "loc_key":"Rarity_Uncommon",
--             "color":"desc_uncommon",
--             "next_rarity":"rare"
CREATE TABLE tbl_rarities (
    rarity VARCHAR(128) NOT NULL PRIMARY KEY,
    value INTEGER NOT NULL,
    loc_key VARCHAR(128) NOT NULL,
    color VARCHAR(128) NOT NULL,
    FOREIGN KEY (color) REFERENCES tbl_colors (color)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE tbl_colors (
    color VARCHAR(128) NOT NULL PRIMARY KEY,
    color_name VARCHAR(128) NOT NULL,
    hex_color VARCHAR(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE tbl_heros (
    name VARCHAR(128) NOT NULL,
    hero_id VARCHAR(128) NOT NULL PRIMARY KEY,
    localized_name VARCHAR(128) NOT NULL,
    UNIQUE (name),
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



CREATE TABLE tbl_prefabs (
    name VARCHAR(128) NOT NULL PRIMARY KEY,
    item_class VARCHAR(128),
    item_type_name VARCHAR(128),
    item_slot VARCHAR(128),
    item_rarity VARCHAR(128),
    min_ilevel INTEGER,
    max_ilevel INTEGER,
    item_set VARCHAR(128)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE tbl_items (
    id INTEGER NOT NULL PRIMARY KEY,
    name VARCHAR(128) NOT NULL,
    prefab VARCHAR(128),
    item_type_name VARCHAR(128),
    item_name VARCHAR(128),
    item_slot VARCHAR(128),
    item_rarity VARCHAR(128) DEFAULT 'common',
    item_description VARCHAR(128),
    item_set VARCHAR(128), 
    FOREIGN KEY (prefab) REFERENCES tbl_prefabs(name),
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE tbl_item_used_heros (
    id INTEGER NOT NULL PRIMARY KEY,
    hero_name VARCHAR(128) NOT NULL,
    FOREIGN KEY (hero_name) REFERENCES tbl_heros(name),
    FOREIGN KEY (id) REFERENCES tbl_items(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- [2] => Array
--                         (
--                             [id] => 29151832
--                             [original_id] => 29151832
--                             [defindex] => 4014
--                             [level] => 1
--                             [quality] => 4
--                             [inventory] => 291
--                             [quantity] => 1
--                             [equipped] => Array
--                                 (
--                                     [0] => Array
--                                         (
--                                             [class] => 8
--                                             [slot] => 3
--                                         )

--                                 )

--                         )
CREATE TABLE tbl_player_items (
    id BIGINT NOT NULL PRIMARY KEY,
    player_id BIGINT,
    original_id BIGINT,
    defindex INTEGER,
    level INTEGER,
    quality INTEGER,
    inventory VARCHAR(128),
    quantity VARCHAR(128),
    equipped BOOLEAN,
    FOREIGN KEY (defindex) REFERENCES tbl_items(id),
    FOREIGN KEY (player_id) REFERENCES tbl_players(steamid)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;





-- "players": [
--             {
--                 "steamid": "76561198060290569",
--                 "communityvisibilitystate": 3,
--                 "profilestate": 1,
--                 "personaname": "JukeBox_",
--                 "lastlogoff": 1363687928,
--                 "profileurl": "http://steamcommunity.com/profiles/76561198060290569/",
--                 "avatar": "http://media.steampowered.com/steamcommunity/public/images/avatars/4d/4d7a2214d7d6c61bf50158739b8d45b036624af0.jpg",
--                 "avatarmedium": "http://media.steampowered.com/steamcommunity/public/images/avatars/4d/4d7a2214d7d6c61bf50158739b8d45b036624af0_medium.jpg",
--                 "avatarfull": "http://media.steampowered.com/steamcommunity/public/images/avatars/4d/4d7a2214d7d6c61bf50158739b8d45b036624af0_full.jpg",
--                 "personastate": 0,
--                 "primaryclanid": "103582791429521408",
--                 "timecreated": 1331722325
--             }
--         ]
CREATE TABLE tbl_players (
    steamid BIGINT NOT NULL PRIMARY KEY,
    communityvisibilitystate INTEGER,
    profilestate INTEGER,
    personaname VARCHAR(128),
    lastlogoff INTEGER,
    profileurl VARCHAR(128),
    avatar VARCHAR(128),
    avatarmedium VARCHAR(128),
    avatarfull VARCHAR(128),
    personastate INTEGER,
    primaryclanid VARCHAR(128),
    timecreated INTEGER
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


    -- [0] => Array
    --     (
    --         [item_set] => alchemy_essentials
    --         [name] => #DOTA_Set_Alchemy_Essentials
    --         [store_bundle] => Alchemy Essentials Set
    --         [items] => Array
    --             (
    --                 [0] => Assistant's Respirator
    --                 [1] => Assistant's Cutter
    --                 [2] => Assistant's Blades of Scientific Inquiry
    --                 [3] => Experimentalist's Laboratory Essentials
    --                 [4] => Experimentalist's Goggles
    --                 [5] => Experimentalist's Unstable Flask
    --                 [6] => Assistant's Muscle Pump
    --             )

    --     )
CREATE TABLE tbl_item_set (
    id INTEGER NOT NULL PRIMARY KEY,
    name VARCHAR(128) NOT NULL,
    prefab VARCHAR(128),
    item_type_name VARCHAR(128),
    item_name VARCHAR(128),
    item_rarity VARCHAR(128) DEFAULT 'common',
    item_description VARCHAR(128),
    item_set VARCHAR(128), 
    FOREIGN KEY (prefab) REFERENCES tbl_prefabs(name),
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE tbl_item_set_items (
    item_set VARCHAR(128) NOT NULL,
    name VARCHAR(128),
    FOREIGN KEY (name) REFERENCES tbl_items(name),
    FOREIGN KEY (item_set) REFERENCES tbl_item_sets(item_set),
    PRIMARY KEY (item_set, name)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE tbl_APIKEY (
    id INTEGER NOT NULL AUTO_INCREMENT,
    APIKEY VARCHAR(128) NOT NULL, 
    PRIMARY KEY (id)
)












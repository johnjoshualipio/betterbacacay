<?php

use Illuminate\Support\Str;

$verifiedOn = '2026-09-06';
$psa = 'psa_barangays';

$barangayNames = [
    'Baclayon', 'Banao', 'Bariw', 'Basud', 'Bayandong', 'Bonga', 'Buang', 'Cabasan',
    'Cagbulacao', 'Cagraray', 'Cajogutan', 'Cawayan', 'Damacan', 'Gubat Ilawod', 'Gubat Iraya', 'Hindi',
    'Igang', 'Langaton', 'Manaet', 'Mapulang Daga', 'Mataas', 'Misibis', 'Nahapunan', 'Namanday',
    'Namantao', 'Napao', 'Panarayon', 'Pigcobohan', 'Pili Ilawod', 'Pili Iraya', 'Barangay 1', 'Barangay 10',
    'Barangay 11', 'Barangay 12', 'Barangay 13', 'Barangay 14', 'Barangay 2', 'Barangay 3', 'Barangay 4',
    'Barangay 5', 'Barangay 6', 'Barangay 7', 'Barangay 8', 'Barangay 9', 'Pongco', 'Busdac', 'San Pablo',
    'San Pedro', 'Sogod', 'Sula', 'Tambilagao', 'Tambongon', 'Tanagan', 'Uson', 'Vinisitahan-Basud',
    'Vinisitahan-Napao',
];

return [
    'name' => 'BetterBacacay',
    'tagline' => 'Our people. Our home. A brighter Bacacay.',
    'location' => 'Bacacay, Albay, Philippines',
    'verified_on' => $verifiedOn,
    'independence' => 'BetterBacacay is an independent civic information project. It is not an official LGU website and does not create government cases or transactions.',
    'images' => [
        'hero' => '/images/betterbacacay/hero-coast.png',
        'island' => '/images/betterbacacay/island-aerial.png',
        'weave' => '/images/betterbacacay/karagumoy-weave.png',
        'festival' => '/images/betterbacacay/festival-concept.png',
        'community' => '/images/betterbacacay/community-coast.png',
    ],
    'image_credit' => 'Concept artwork generated for BetterBacacay. These visuals are decorative and are not documentary evidence.',
    'navigation' => [
        ['label' => 'Home', 'route' => 'home', 'active' => 'home'],
        ['label' => 'About', 'route' => 'about', 'active' => 'about'],
        ['label' => 'Services', 'route' => 'services', 'active' => 'services*'],
        ['label' => 'Barangays', 'route' => 'barangays', 'active' => 'barangays*'],
        ['label' => 'Transparency', 'route' => 'transparency', 'active' => 'transparency*'],
        ['label' => 'Tourism', 'route' => 'tourism', 'active' => 'tourism*'],
        ['label' => 'News', 'route' => 'news', 'active' => 'news*'],
        ['label' => 'Contact', 'route' => 'contact', 'active' => 'contact'],
    ],
    'sources' => [
        'psa_barangays' => ['title' => 'PSA PSGC: Bacacay barangays', 'organization' => 'Philippine Statistics Authority', 'url' => 'https://psa.gov.ph/classification/psgc/barangays/0500501000'],
        'karagumoy' => ['title' => 'Karagumoy production manual meeting', 'organization' => 'PCAARRD / DOST', 'url' => 'https://www.pcaarrd.dost.gov.ph/index.php/quick-information-dispatch-qid-articles/meeting-on-karagomoi-production-manual-held'],
        'albay_tourism' => ['title' => 'Albay Provincial Tourism, Culture and Arts Office', 'organization' => 'Provincial Tourism Office', 'url' => 'https://www.govserv.org/PH/Legazpi/1427391867558480/Provincial-Tourism,-Culture-and-Arts-Office---Albay'],
        'national_emergency' => ['title' => 'eHotlines national emergency assistance', 'organization' => 'Government of the Philippines', 'url' => 'https://ehotlines.e.gov.ph/'],
        'bettergov' => ['title' => 'BetterGov.ph', 'organization' => 'Department of Information and Communications Technology', 'url' => 'https://bettergov.ph/'],
    ],
    'quick_links' => [
        ['title' => 'Tourism', 'description' => 'Discover beaches, islands, and local experiences.', 'href' => 'tourism', 'icon' => 'island'],
        ['title' => 'Services', 'description' => 'Find public information and service guides.', 'href' => 'services', 'icon' => 'document'],
        ['title' => 'Barangays', 'description' => 'Explore community information from coast to center.', 'href' => 'barangays', 'icon' => 'people'],
        ['title' => 'News', 'description' => 'Read updates and stories from Bacacay.', 'href' => 'news', 'icon' => 'newspaper'],
        ['title' => 'Community', 'description' => 'Find ways to participate and help.', 'href' => 'contact', 'icon' => 'heart'],
    ],
    'facts' => [
        ['value' => '56', 'label' => 'Barangays', 'description' => 'PSA PSGC listing', 'icon' => 'people', 'sources' => [$psa], 'last_verified' => $verifiedOn],
        ['value' => '72,298', 'label' => '2024 population', 'description' => 'Latest PSA profile figure', 'icon' => 'people', 'sources' => [$psa], 'last_verified' => $verifiedOn],
        ['value' => '1st class', 'label' => 'Municipality', 'description' => 'PSA classification', 'icon' => 'building', 'sources' => [$psa], 'last_verified' => $verifiedOn],
        ['value' => 'Coastal', 'label' => 'Community', 'description' => 'Bicol’s island-facing town', 'icon' => 'waves', 'sources' => [], 'last_verified' => null],
    ],
    'services' => [
        ['slug' => 'permits-and-documents', 'title' => 'Permits and Documents', 'summary' => 'Start with a plain-language guide to permits, certificates, and LGU-issued documents.', 'description' => 'This guide is being assembled from public office sources. Confirm requirements, fees, and processing times with the responsible office before visiting.', 'category' => 'Public service', 'icon' => 'document', 'status' => 'needs_verification', 'sources' => [], 'last_verified' => null],
        ['slug' => 'civil-registry', 'title' => 'Civil Registry', 'summary' => 'Find starting points for civil registry records and related requests.', 'description' => 'Specific requirements and contact details are being verified with official sources.', 'category' => 'Public service', 'icon' => 'archive', 'status' => 'needs_verification', 'sources' => [], 'last_verified' => null],
        ['slug' => 'business-and-licensing', 'title' => 'Business and Licensing', 'summary' => 'A future guide to local business permits and licensing information.', 'description' => 'Details are being compiled so the published steps can be checked and kept current.', 'category' => 'Public service', 'icon' => 'briefcase', 'status' => 'needs_verification', 'sources' => [], 'last_verified' => null],
        ['slug' => 'health-and-emergency', 'title' => 'Health and Emergency Contacts', 'summary' => 'Get a clear starting point for health services and urgent contacts.', 'description' => 'For immediate emergencies, call 911. Local facility and hotline details are being verified.', 'category' => 'Public service', 'icon' => 'health', 'status' => 'needs_verification', 'sources' => ['national_emergency'], 'last_verified' => $verifiedOn],
        ['slug' => 'social-services', 'title' => 'Social Services', 'summary' => 'Learn where to look for assistance programs and support.', 'description' => 'Program eligibility and application details are not yet published here.', 'category' => 'Public service', 'icon' => 'heart', 'status' => 'needs_verification', 'sources' => [], 'last_verified' => null],
        ['slug' => 'education', 'title' => 'Education', 'summary' => 'Find future guides to scholarships, schools, and learning programs.', 'description' => 'Local program information is being compiled and verified.', 'category' => 'Public service', 'icon' => 'book', 'status' => 'needs_verification', 'sources' => [], 'last_verified' => null],
        ['slug' => 'jobs-and-livelihood', 'title' => 'Jobs and Livelihood', 'summary' => 'Explore employment and livelihood program information as it becomes available.', 'description' => 'Current opportunities and official program contacts are being verified.', 'category' => 'Public service', 'icon' => 'briefcase', 'status' => 'needs_verification', 'sources' => [], 'last_verified' => null],
        ['slug' => 'agriculture-and-fisheries', 'title' => 'Agriculture and Fisheries', 'summary' => 'A future guide to resources for farmers and fisherfolk.', 'description' => 'Program and office details are being verified before publication.', 'category' => 'Public service', 'icon' => 'leaf', 'status' => 'needs_verification', 'sources' => [], 'last_verified' => null],
        ['slug' => 'disaster-preparedness', 'title' => 'Disaster Preparedness', 'summary' => 'Prepare with emergency guides, evacuation information, and safety resources.', 'description' => 'Use 911 for immediate emergencies. Local preparedness resources are being assembled.', 'category' => 'Public service', 'icon' => 'shield', 'status' => 'needs_verification', 'sources' => ['national_emergency'], 'last_verified' => $verifiedOn],
        ['slug' => 'local-ordinances', 'title' => 'Local Ordinances', 'summary' => 'Access local resolutions, ordinances, and policies when published by official sources.', 'description' => 'A searchable ordinance collection is a future enhancement; send us a link if you know of an official repository.', 'category' => 'Public service', 'icon' => 'scroll', 'status' => 'needs_verification', 'sources' => [], 'last_verified' => null],
    ],
    'destinations' => [
        ['slug' => 'cagraray-island', 'title' => 'Cagraray Island', 'summary' => 'A coastal island destination to explore with care and respect for local communities.', 'description' => 'Visitor information, access details, and responsible travel guidance are being verified.', 'category' => 'Island', 'icon' => 'island', 'image' => 'island', 'status' => 'needs_verification', 'sources' => [], 'last_verified' => null],
        ['slug' => 'sula-channel', 'title' => 'Sula Channel', 'summary' => 'A scenic passage between islands and a place for mindful coastal exploration.', 'description' => 'Route, safety, and access information is being verified.', 'category' => 'Nature', 'icon' => 'waves', 'image' => 'hero', 'status' => 'needs_verification', 'sources' => [], 'last_verified' => null],
        ['slug' => 'pinamuntugan-island', 'title' => 'Pinamuntugan Island', 'summary' => 'A quiet island setting associated with clear waters and coastal landscapes.', 'description' => 'Visitor and environmental details are being verified before publication.', 'category' => 'Island', 'icon' => 'island', 'image' => 'community', 'status' => 'needs_verification', 'sources' => [], 'last_verified' => null],
        ['slug' => 'st-rose-of-lima-parish-church', 'title' => 'St. Rose of Lima Parish Church', 'summary' => 'A local heritage place whose history deserves careful documentation.', 'description' => 'Historical details and visiting information are being verified.', 'category' => 'Heritage', 'icon' => 'building', 'image' => 'community', 'status' => 'needs_verification', 'sources' => [], 'last_verified' => null],
        ['slug' => 'karagumoy-weaving', 'title' => 'Karagumoy Weaving', 'summary' => 'A time-honored craft and livelihood connected to Cagraray Island.', 'description' => 'PCAARRD documented work on a karagumoy production manual and described its livelihood potential in the area.', 'category' => 'Culture', 'icon' => 'weave', 'image' => 'weave', 'status' => 'verified', 'sources' => ['karagumoy'], 'last_verified' => $verifiedOn],
    ],
    'experiences' => [
        ['title' => 'Island hopping', 'description' => 'Visit nearby islands and hidden beaches.', 'icon' => 'island'],
        ['title' => 'Local crafts', 'description' => 'Meet artisans and learn about karagumoy weaving.', 'icon' => 'weave'],
        ['title' => 'Festivals', 'description' => 'Experience living traditions and community celebrations.', 'icon' => 'spark'],
        ['title' => 'Local food', 'description' => 'Savor fresh seafood and Bicolano flavors.', 'icon' => 'utensils'],
        ['title' => 'Scenic viewpoints', 'description' => 'Capture views of land, mountains, and sea.', 'icon' => 'camera'],
    ],
    'culture' => ['title' => 'Karagumoy Festival', 'summary' => 'A celebration of heritage, creativity, and community connected to Bacacay’s weaving tradition.', 'description' => 'The festival and its current program should be confirmed with the responsible tourism office before a visit.', 'image' => 'festival', 'sources' => ['albay_tourism', 'karagumoy'], 'last_verified' => $verifiedOn, 'status' => 'needs_verification'],
    'news' => [
        ['slug' => 'karagumoy-festival-2026', 'title' => 'Karagumoy Festival 2026', 'summary' => 'A community celebration of local craft, creativity, and heritage.', 'description' => 'Public listings describe a 2026 Karagumoy Festival program in Albay. Confirm dates and venue before making plans.', 'category' => 'Community', 'icon' => 'spark', 'image' => 'festival', 'status' => 'needs_verification', 'sources' => ['albay_tourism'], 'last_verified' => $verifiedOn, 'published_at' => '2026-01-01'],
        ['slug' => 'karagumoy-livelihood', 'title' => 'Karagumoy and coastal livelihoods', 'summary' => 'Local craft can carry culture, skills, and opportunity across generations.', 'description' => 'PCAARRD reported on work toward a karagumoy production manual and the craft’s livelihood potential in Cagraray Island.', 'category' => 'Culture', 'icon' => 'weave', 'image' => 'weave', 'status' => 'verified', 'sources' => ['karagumoy'], 'last_verified' => $verifiedOn, 'published_at' => '2026-01-02'],
        ['slug' => 'a-brighter-bacacay', 'title' => 'A brighter Bacacay starts with shared information', 'summary' => 'Better civic information is built with residents, offices, and community partners.', 'description' => 'Help improve this independent guide by sharing official links, corrections, and missing public information.', 'category' => 'Participation', 'icon' => 'people', 'image' => 'community', 'status' => 'needs_verification', 'sources' => [], 'last_verified' => null, 'published_at' => '2026-01-03'],
    ],
    'community_actions' => [
        ['title' => 'Share a correction', 'description' => 'Help keep public information accurate and useful.', 'icon' => 'message', 'href' => 'contact'],
        ['title' => 'Report a broken link', 'description' => 'Tell us when an official resource no longer works.', 'icon' => 'alert', 'href' => 'contact'],
        ['title' => 'Submit a public source', 'description' => 'Point maintainers to a primary source we should review.', 'icon' => 'document', 'href' => 'contact'],
        ['title' => 'Stay connected', 'description' => 'Get occasional updates about this civic guide.', 'icon' => 'mail', 'href' => 'contact'],
    ],
    'offices' => [
        ['name' => 'Municipal Hall', 'description' => 'General municipal information and public office starting point.', 'address' => 'Poblacion, Bacacay, Albay', 'phone' => null, 'email' => null, 'status' => 'needs_verification', 'sources' => [], 'last_verified' => null],
        ['name' => 'Municipal Health Office', 'description' => 'Health service information and local facility contacts.', 'address' => null, 'phone' => null, 'email' => null, 'status' => 'needs_verification', 'sources' => [], 'last_verified' => null],
        ['name' => 'Municipal Disaster Risk Reduction and Management Office', 'description' => 'Preparedness and emergency coordination information.', 'address' => null, 'phone' => null, 'email' => null, 'status' => 'needs_verification', 'sources' => ['national_emergency'], 'last_verified' => $verifiedOn],
    ],
    'hotlines' => [
        ['name' => 'National emergency hotline', 'number' => '911', 'description' => 'For immediate emergencies requiring urgent assistance.', 'source' => 'national_emergency', 'last_verified' => $verifiedOn],
    ],
    'contact' => ['address' => 'Municipal Hall, Poblacion, Bacacay, Albay', 'phone' => null, 'email' => null, 'hours' => null],
    'transparency' => [
        'officials' => ['title' => 'Officials', 'summary' => 'Public officials and roles will be listed after an official source is verified.', 'description' => null, 'status' => 'being_compiled', 'records' => [], 'sources' => [], 'last_verified' => null],
        'offices' => ['title' => 'Offices and responsibilities', 'summary' => 'Find public office information in the directory while this section is being compiled.', 'description' => null, 'status' => 'being_compiled', 'records' => [], 'sources' => [], 'last_verified' => null],
        'documents' => ['title' => 'Public documents', 'summary' => 'Official documents and disclosure links will appear here once source locations are verified.', 'description' => null, 'status' => 'being_compiled', 'records' => [], 'sources' => [], 'last_verified' => null],
        'projects' => ['title' => 'Projects and programs', 'summary' => 'Project records need a clear primary source and update date before publication.', 'description' => null, 'status' => 'being_compiled', 'records' => [], 'sources' => [], 'last_verified' => null],
    ],
    'barangays' => array_map(fn (string $name): array => ['slug' => Str::slug($name), 'name' => $name, 'summary' => 'Community information for '.$name.' is being compiled.', 'description' => 'Send us an official source or correction to help build this barangay profile.', 'category' => 'Barangay', 'icon' => 'people', 'status' => 'needs_verification', 'sources' => [$psa], 'last_verified' => $verifiedOn], $barangayNames),
];

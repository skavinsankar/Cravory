const restaurants = [
  {
    id: 1, name: "Sree Annapoorna", image: "img/Res Img/Sree Annapoorna.jpg", rating: 4.5, reviews: 85, type: "Veg",
    cuisine: "Indian, Norht Indian, South Indian", description: "A famous Coimbatore-based vegetarian restaurant offering traditional meals.",
    menulink: "📄 View menu on restaurant's website", reviewtitle: "What {reviews} people are saying",
    review_description: "A famous Coimbatore-based vegetarian restaurant offering traditional meals.",
    rating_title: "Overall ratings and reviews", rating_description: "Reviews can only be made by diners who have eaten at this restaurant",
    // Additional Information
    neighborhood: " R.S. Puram, Coimbatore", hours: "Mon–Sat 9:00 am–10:00 pm", openHour: 9, closeHour: 22, isAvailable: true, diningStyle: "Casual Dining",
    parking: "Street & Valet", payment: "Cards, AMEX, Visa, Mastercard",
    additional: "Banquet, Bar/Lounge, Beer, Cocktails, Corkage Fee, Counter Seating, Dancing, Delivery, Entertainment, Full Bar, Gluten-free Options, Late Night, Non-Smoking, Patio/Outdoor Dining, Private Room,Takeout, View, Wheelchair Access, Wine",
    website: "https://annapoorna.co.in", phone: "91+ 908765432", catering: "Yes, custom vegetarian catering available",
    partyFacilities: "Separate halls for group functions and events", partyContact: "Ramesh Kumar : 0422 2244667"
  },
  {
    id: 2, name: "Haribhavanam", image: "img/Res Img/Haribhavanam.jpg", rating: 4.6, reviews: 56, type: "Veg",
    cuisine: " Norht Indian, South Indian", description: "A famous Coimbatore-based vegetarian restaurant offering traditional meals.",
    menulink: "📄 View menu on restaurant's website", reviewtitle: "What {reviews} people are saying",
    review_description: "A famous Coimbatore-based vegetarian restaurant offering traditional meals.",
    rating_title: "Overall ratings and reviews", rating_description: "Reviews can only be made by diners who have eaten at this restaurant",
    // Additional Information
    neighborhood: "Peelamedu, Coimbatore", hours: "Mon–Sat 7:00 am–10:00 pm", openHour: 7, closeHour: 22, isAvailable: true,
    diningStyle: "Casual Dining", parking: "Street & Valet", payment: "AMEX, Visa, Mastercard",
    additional: "Banquet, Bar/Lounge, Beer, Cocktails, Corkage Fee, Counter Seating, Dancing, Delivery, Entertainment, Full Bar, Gluten-free Options, Late Night, Non-Smoking, Patio/Outdoor Dining, Private Room,Takeout, View, Wheelchair Access, Wine",
    website: "https://Haribhavanam.co.in", phone: "91+ 908765432", catering: "Yes, custom vegetarian catering available",
    partyFacilities: "Separate halls for group functions and events", partyContact: "Ramesh Kumar : 0422 2244667"
  },
  {
    id: 3, name: "Bird on Tree", image: "img/Res Img/Bird  on tree.jpg", rating: 4.7, reviews: 96, type: "Veg, Non-Veg",
    cuisine: " Norht Indian, South Indian", description: "A famous Coimbatore-based vegetarian restaurant offering traditional meals.",
    menulink: "📄 View menu on restaurant's website", reviewtitle: "What {reviews} people are saying",
    review_description: "A famous Coimbatore-based vegetarian restaurant offering traditional meals.",
    rating_title: "Overall ratings and reviews", rating_description: "Reviews can only be made by diners who have eaten at this restaurant",
    // Additional Information
    neighborhood: " Race Course Road, Coimbatore", hours: "Mon–Sat 9:00 am–10:00 pm", openHour: 8, closeHour: 22, isAvailable: true,
    diningStyle: "Casual Dining", parking: "Street & Valet", payment: "AMEX, Visa, Mastercard",
    additional: "Banquet, Bar/Lounge, Beer, Cocktails, Corkage Fee, Counter Seating, Dancing, Delivery, Entertainment, Full Bar, Gluten-free Options, Late Night, Non-Smoking, Patio/Outdoor Dining, Private Room,Takeout, View, Wheelchair Access, Wine",
    website: "https://Bird on Tree.co.in", phone: "91+ 908765432", catering: "Yes, custom vegetarian catering available",
    partyFacilities: "Separate halls for group functions and events", partyContact: "Ramesh Kumar : 0422 2244667"
  },
  {
    id: 4, name: "Junior Kuppanna", image: "img/Res Img/junior-kuppanna.jpg", rating: 4.5, reviews: 56, type: "Non-Veg",
    cuisine: " Norht Indian, South Indian", description: "A famous Coimbatore-based vegetarian restaurant offering traditional meals.",
    menulink: "📄 View menu on restaurant's website", reviewtitle: "What {reviews} people are saying",
    review_description: "A famous Coimbatore-based vegetarian restaurant offering traditional meals.",
    rating_title: "Overall ratings and reviews", rating_description: "Reviews can only be made by diners who have eaten at this restaurant",
    // Additional Information
    neighborhood: "Ram Nagar, Coimbatore", hours: "Mon–Sat 9:00 am–10:00 pm", openHour: 9, closeHour: 22, isAvailable: false,
    diningStyle: "Casual Dining", parking: "Street & Valet", payment: "AMEX, Visa, Mastercard",
    additional: "Banquet, Bar/Lounge, Beer, Cocktails, Corkage Fee, Counter Seating, Dancing, Delivery, Entertainment, Full Bar, Gluten-free Options, Late Night, Non-Smoking, Patio/Outdoor Dining, Private Room,Takeout, View, Wheelchair Access, Wine",
    website: "https://Junior Kuppanna.co.in", phone: "91+ 908765432", catering: "Yes, custom vegetarian catering available",
    partyFacilities: "Separate halls for group functions and events", partyContact: "Ramesh Kumar : 0422 2244667"
  },
  {
    id: 5, name: "Shree Anandhaas", image: "img/Res Img/Shree Anandhas.jpg", rating: 4.5, reviews: 68, type: "Non-Veg",
    cuisine: " Norht Indian, South Indian", description: "A famous Coimbatore-based vegetarian restaurant offering traditional meals.",
    menulink: "📄 View menu on restaurant's website", reviewtitle: "What {reviews} people are saying",
    review_description: "A famous Coimbatore-based vegetarian restaurant offering traditional meals.",
    rating_title: "Overall ratings and reviews", rating_description: "Reviews can only be made by diners who have eaten at this restaurant",
    // Additional Information
    neighborhood: "Ram Nagar, Coimbatore", hours: "Mon–Sat 10:00 am–11:00 pm", openHour: 10, closeHour: 23, isAvailable: true,
    diningStyle: "Casual Dining", parking: "Street & Valet", payment: "AMEX, Visa, Mastercard",
    additional: "Banquet, Bar/Lounge, Beer, Cocktails, Corkage Fee, Counter Seating, Dancing, Delivery, Entertainment, Full Bar, Gluten-free Options, Late Night, Non-Smoking, Patio/Outdoor Dining, Private Room,Takeout, View, Wheelchair Access, Wine",
    website: "https://Shree Anandhaas.co.in", phone: "91+ 908765432", catering: "Yes, custom vegetarian catering available",
    partyFacilities: "Separate halls for group functions and events", partyContact: "Ramesh Kumar : 0422 2244667"
  },
  {
    id: 6, name: "Spice Nation", image: "img/Res Img/spice-nation.jpg", rating: 4.3, reviews: 431, type: "Non-Veg",
    cuisine: " Norht Indian, South Indian", description: "A famous Coimbatore-based vegetarian restaurant offering traditional meals.",
    menulink: "📄 View menu on restaurant's website", reviewtitle: "What {reviews} people are saying",
    review_description: "A famous Coimbatore-based vegetarian restaurant offering traditional meals.",
    rating_title: "Overall ratings and reviews", rating_description: "Reviews can only be made by diners who have eaten at this restaurant",
    // Additional Information
    neighborhood: " Thudiyalur, Coimbatore", hours: "Mon–Sat 06:00 pm–11:00 pm", openHour: 18, closeHour: 24, isAvailable: true,
    diningStyle: "Casual Dining", parking: "Street & Valet", payment: "AMEX, Visa, Mastercard",
    additional: "Banquet, Bar/Lounge, Beer, Cocktails, Corkage Fee, Counter Seating, Dancing, Delivery, Entertainment, Full Bar, Gluten-free Options, Late Night, Non-Smoking, Patio/Outdoor Dining, Private Room,Takeout, View, Wheelchair Access, Wine",
    website: "https://Spice Nation.co.in", phone: "91+ 908765432", catering: "Yes, custom vegetarian catering available",
    partyFacilities: "Separate halls for group functions and events", partyContact: "Ramesh Kumar : 0422 2244667"
  },
  {
    id: 7, name: "Green Leaf", image: "img/Res Img/green-leaf.jpg", rating: 4.0, reviews: 175, type: "Non-Veg",
    cuisine: " Norht Indian", description: "A famous Coimbatore-based vegetarian restaurant offering traditional meals.",
    menulink: "📄 View menu on restaurant's website", reviewtitle: "What {reviews} people are saying",
    review_description: "A famous Coimbatore-based vegetarian restaurant offering traditional meals.",
    rating_title: "Overall ratings and reviews", rating_description: "Reviews can only be made by diners who have eaten at this restaurant",
    // Additional Information
    neighborhood: " Saravanampatti, Coimbatore", hours: "Mon–Sat 11:00 am–11:00 pm", openHour: 11, closeHour: 22, isAvailable: true,
    diningStyle: "Casual Dining", parking: "Street & Valet", payment: "AMEX, Visa, Mastercard",
    additional: "Banquet, Bar/Lounge, Beer, Cocktails, Corkage Fee, Counter Seating, Dancing, Delivery, Entertainment, Full Bar, Gluten-free Options, Late Night, Non-Smoking, Patio/Outdoor Dining, Private Room,Takeout, View, Wheelchair Access, Wine",
    website: "https://green leaf.co.in", phone: "91+ 908765432", catering: "Yes, custom vegetarian catering available",
    partyFacilities: "Separate halls for group functions and events", partyContact: "Ramesh Kumar : 0422 2244667"
  },
  {
    id: 8, name: "Spice Trail", image: "img/Res Img/Spice trail.jpg", rating: 4.9, reviews: 575, type: "Veg, Non-Veg", cuisine: " All Cuisine",
    description: "A famous Coimbatore-based vegetarian restaurant offering traditional meals.", menulink: "📄 View menu on restaurant's website",
    reviewtitle: "What {reviews} people are saying", review_description: "A famous Coimbatore-based vegetarian restaurant offering traditional meals.",
    rating_title: "Overall ratings and reviews", rating_description: "Reviews can only be made by diners who have eaten at this restaurant",
    // Additional Information
    neighborhood: "Red Cross Rd, Egmore, Chennai", hours: "Mon–Sat 07:00 am–11:00 pm", openHour: 1, closeHour: 24, isAvailable: true,
    diningStyle: "Casual Dining", parking: "Street & Valet", payment: "AMEX, Visa, Mastercard",
    additional: "Banquet, Bar/Lounge, Beer, Cocktails, Corkage Fee, Counter Seating, Dancing, Delivery, Entertainment, Full Bar, Gluten-free Options, Late Night, Non-Smoking, Patio/Outdoor Dining, Private Room,Takeout, View, Wheelchair Access, Wine",
    website: "https://Spice Trail.co.in", phone: "91+ 908765432", catering: "Yes, custom vegetarian catering available",
    partyFacilities: "Separate halls for group functions and events", partyContact: "Ramesh Kumar : 0422 2244667"
  },
  {
    id: 9, name: "Grillz", image: "img/Res Img/grillz.jpg", rating: 4.2, reviews: 575, type: "Veg, Non-Veg",
    cuisine: " All Cuisine", description: "A famous Coimbatore-based vegetarian restaurant offering traditional meals.",
    menulink: "📄 View menu on restaurant's website", reviewtitle: "What {reviews} people are saying",
    review_description: "A famous Coimbatore-based vegetarian restaurant offering traditional meals.",
    rating_title: "Overall ratings and reviews", rating_description: "Reviews can only be made by diners who have eaten at this restaurant",
    // Additional Information
    neighborhood: "Bannimantap, Mysuru, Karnataka", hours: "Mon–Sat 08:00 am–11:00 pm", openHour: 17, closeHour: 24, isAvailable: true,
    diningStyle: "Casual Dining", parking: "Street & Valet", payment: "AMEX, Visa, Mastercard",
    additional: "Banquet, Bar/Lounge, Beer, Cocktails, Corkage Fee, Counter Seating, Dancing, Delivery, Entertainment, Full Bar, Gluten-free Options, Late Night, Non-Smoking, Patio/Outdoor Dining, Private Room,Takeout, View, Wheelchair Access, Wine",
    website: "https://grillz.co.in", phone: "91+ 908765432", catering: "Yes, custom vegetarian catering available",
    partyFacilities: "Separate halls for group functions and events", partyContact: "Ramesh Kumar : 0422 2244667"
  },
  {
    id: 10, name: "Annalakshmi", image: "img/Res Img/Annalakshmi.jpg", rating: 4.6, reviews: 1075, type: "Veg, Non-Veg",
    cuisine: " All Cuisine", description: "A famous Coimbatore-based vegetarian restaurant offering traditional meals.",
    menulink: "📄 View menu on restaurant's website", reviewtitle: "What {reviews} people are saying",
    review_description: "A famous Coimbatore-based vegetarian restaurant offering traditional meals.",
    rating_title: "Overall ratings and reviews", rating_description: "Reviews can only be made by diners who have eaten at this restaurant",
    // Additional Information
    neighborhood: "Spur Tank road, Chennai", hours: "Mon–Sat 09:00 am–09:00 pm", openHour: 9, closeHour: 21, isAvailable: true,
    diningStyle: "Casual Dining", parking: "Street & Valet", payment: "AMEX, Visa, Mastercard",
    additional: "Banquet, Bar/Lounge, Beer, Cocktails, Corkage Fee, Counter Seating, Dancing, Delivery, Entertainment, Full Bar, Gluten-free Options, Late Night, Non-Smoking, Patio/Outdoor Dining, Private Room,Takeout, View, Wheelchair Access, Wine",
    website: "https://annalakshmi.co.in", phone: "91+ 908765432", catering: "Yes, custom vegetarian catering available",
    partyFacilities: "Separate halls for group functions and events", partyContact: "Ramesh Kumar : 0422 2244667"
  },
  {
    id: 11, name: "Sree Annapoorna", image: "img/Res Img/Sree Annapoorna.jpg", rating: 4.5, reviews: 85, type: "Veg",
    cuisine: "Indian, Norht Indian, South Indian", description: "A famous Coimbatore-based vegetarian restaurant offering traditional meals.",
    menulink: "📄 View menu on restaurant's website", reviewtitle: "What {reviews} people are saying",
    review_description: "A famous Coimbatore-based vegetarian restaurant offering traditional meals.",
    rating_title: "Overall ratings and reviews", rating_description: "Reviews can only be made by diners who have eaten at this restaurant",
    // Additional Information
    neighborhood: " R.S. Puram, Coimbatore", hours: "Mon–Sat 9:00 am–10:00 pm", openHour: 9, closeHour: 22, isAvailable: true, diningStyle: "Casual Dining",
    parking: "Street & Valet", payment: "Cards, AMEX, Visa, Mastercard",
    additional: "Banquet, Bar/Lounge, Beer, Cocktails, Corkage Fee, Counter Seating, Dancing, Delivery, Entertainment, Full Bar, Gluten-free Options, Late Night, Non-Smoking, Patio/Outdoor Dining, Private Room,Takeout, View, Wheelchair Access, Wine",
    website: "https://annapoorna.co.in", phone: "91+ 908765432", catering: "Yes, custom vegetarian catering available",
    partyFacilities: "Separate halls for group functions and events", partyContact: "Ramesh Kumar : 0422 2244667"
  },
  {
    id: 12, name: "Haribhavanam", image: "img/Res Img/Haribhavanam.jpg", rating: 4.6, reviews: 56, type: "Veg",
    cuisine: " Norht Indian, South Indian", description: "A famous Coimbatore-based vegetarian restaurant offering traditional meals.",
    menulink: "📄 View menu on restaurant's website", reviewtitle: "What {reviews} people are saying",
    review_description: "A famous Coimbatore-based vegetarian restaurant offering traditional meals.",
    rating_title: "Overall ratings and reviews", rating_description: "Reviews can only be made by diners who have eaten at this restaurant",
    // Additional Information
    neighborhood: "Peelamedu, Coimbatore", hours: "Mon–Sat 7:00 am–10:00 pm", openHour: 7, closeHour: 22, isAvailable: true,
    diningStyle: "Casual Dining", parking: "Street & Valet", payment: "AMEX, Visa, Mastercard",
    additional: "Banquet, Bar/Lounge, Beer, Cocktails, Corkage Fee, Counter Seating, Dancing, Delivery, Entertainment, Full Bar, Gluten-free Options, Late Night, Non-Smoking, Patio/Outdoor Dining, Private Room,Takeout, View, Wheelchair Access, Wine",
    website: "https://Haribhavanam.co.in", phone: "91+ 908765432", catering: "Yes, custom vegetarian catering available",
    partyFacilities: "Separate halls for group functions and events", partyContact: "Ramesh Kumar : 0422 2244667"
  },
  {
    id: 13, name: "Bird on Tree", image: "img/Res Img/Bird  on tree.jpg", rating: 4.7, reviews: 96, type: "Veg, Non-Veg",
    cuisine: " Norht Indian, South Indian", description: "A famous Coimbatore-based vegetarian restaurant offering traditional meals.",
    menulink: "📄 View menu on restaurant's website", reviewtitle: "What {reviews} people are saying",
    review_description: "A famous Coimbatore-based vegetarian restaurant offering traditional meals.",
    rating_title: "Overall ratings and reviews", rating_description: "Reviews can only be made by diners who have eaten at this restaurant",
    // Additional Information
    neighborhood: " Race Course Road, Coimbatore", hours: "Mon–Sat 9:00 am–10:00 pm", openHour: 8, closeHour: 22, isAvailable: true,
    diningStyle: "Casual Dining", parking: "Street & Valet", payment: "AMEX, Visa, Mastercard",
    additional: "Banquet, Bar/Lounge, Beer, Cocktails, Corkage Fee, Counter Seating, Dancing, Delivery, Entertainment, Full Bar, Gluten-free Options, Late Night, Non-Smoking, Patio/Outdoor Dining, Private Room,Takeout, View, Wheelchair Access, Wine",
    website: "https://Bird on Tree.co.in", phone: "91+ 908765432", catering: "Yes, custom vegetarian catering available",
    partyFacilities: "Separate halls for group functions and events", partyContact: "Ramesh Kumar : 0422 2244667"
  },
  {
    id: 14, name: "Junior Kuppanna", image: "img/Res Img/junior-kuppanna.jpg", rating: 4.5, reviews: 56, type: "Non-Veg",
    cuisine: " Norht Indian, South Indian", description: "A famous Coimbatore-based vegetarian restaurant offering traditional meals.",
    menulink: "📄 View menu on restaurant's website", reviewtitle: "What {reviews} people are saying",
    review_description: "A famous Coimbatore-based vegetarian restaurant offering traditional meals.",
    rating_title: "Overall ratings and reviews", rating_description: "Reviews can only be made by diners who have eaten at this restaurant",
    // Additional Information
    neighborhood: "Ram Nagar, Coimbatore", hours: "Mon–Sat 9:00 am–10:00 pm", openHour: 9, closeHour: 22, isAvailable: true,
    diningStyle: "Casual Dining", parking: "Street & Valet", payment: "AMEX, Visa, Mastercard",
    additional: "Banquet, Bar/Lounge, Beer, Cocktails, Corkage Fee, Counter Seating, Dancing, Delivery, Entertainment, Full Bar, Gluten-free Options, Late Night, Non-Smoking, Patio/Outdoor Dining, Private Room,Takeout, View, Wheelchair Access, Wine",
    website: "https://Junior Kuppanna.co.in", phone: "91+ 908765432", catering: "Yes, custom vegetarian catering available",
    partyFacilities: "Separate halls for group functions and events", partyContact: "Ramesh Kumar : 0422 2244667"
  },
  {
    id: 15, name: "Shree Anandhaas", image: "img/Res Img/Shree Anandhas.jpg", rating: 4.5, reviews: 68, type: "Non-Veg",
    cuisine: " Norht Indian, South Indian", description: "A famous Coimbatore-based vegetarian restaurant offering traditional meals.",
    menulink: "📄 View menu on restaurant's website", reviewtitle: "What {reviews} people are saying",
    review_description: "A famous Coimbatore-based vegetarian restaurant offering traditional meals.",
    rating_title: "Overall ratings and reviews", rating_description: "Reviews can only be made by diners who have eaten at this restaurant",
    // Additional Information
    neighborhood: "Ram Nagar, Coimbatore", hours: "Mon–Sat 10:00 am–11:00 pm", openHour: 10, closeHour: 23, isAvailable: true,
    diningStyle: "Casual Dining", parking: "Street & Valet", payment: "AMEX, Visa, Mastercard",
    additional: "Banquet, Bar/Lounge, Beer, Cocktails, Corkage Fee, Counter Seating, Dancing, Delivery, Entertainment, Full Bar, Gluten-free Options, Late Night, Non-Smoking, Patio/Outdoor Dining, Private Room,Takeout, View, Wheelchair Access, Wine",
    website: "https://Shree Anandhaas.co.in", phone: "91+ 908765432", catering: "Yes, custom vegetarian catering available",
    partyFacilities: "Separate halls for group functions and events", partyContact: "Ramesh Kumar : 0422 2244667"
  },
  {
    id: 16, name: "Spice Nation", image: "img/Res Img/spice-nation.jpg", rating: 4.3, reviews: 431, type: "Non-Veg",
    cuisine: " Norht Indian, South Indian", description: "A famous Coimbatore-based vegetarian restaurant offering traditional meals.",
    menulink: "📄 View menu on restaurant's website", reviewtitle: "What {reviews} people are saying",
    review_description: "A famous Coimbatore-based vegetarian restaurant offering traditional meals.",
    rating_title: "Overall ratings and reviews", rating_description: "Reviews can only be made by diners who have eaten at this restaurant",
    // Additional Information
    neighborhood: " Thudiyalur, Coimbatore", hours: "Mon–Sat 06:00 pm–11:00 pm", openHour: 18, closeHour: 24, isAvailable: false,
    diningStyle: "Casual Dining", parking: "Street & Valet", payment: "AMEX, Visa, Mastercard",
    additional: "Banquet, Bar/Lounge, Beer, Cocktails, Corkage Fee, Counter Seating, Dancing, Delivery, Entertainment, Full Bar, Gluten-free Options, Late Night, Non-Smoking, Patio/Outdoor Dining, Private Room,Takeout, View, Wheelchair Access, Wine",
    website: "https://Spice Nation.co.in", phone: "91+ 908765432", catering: "Yes, custom vegetarian catering available",
    partyFacilities: "Separate halls for group functions and events", partyContact: "Ramesh Kumar : 0422 2244667"
  },
  {
    id: 17, name: "Green Leaf", image: "img/Res Img/green-leaf.jpg", rating: 4.0, reviews: 175, type: "Non-Veg",
    cuisine: " Norht Indian", description: "A famous Coimbatore-based vegetarian restaurant offering traditional meals.",
    menulink: "📄 View menu on restaurant's website", reviewtitle: "What {reviews} people are saying",
    review_description: "A famous Coimbatore-based vegetarian restaurant offering traditional meals.",
    rating_title: "Overall ratings and reviews", rating_description: "Reviews can only be made by diners who have eaten at this restaurant",
    // Additional Information
    neighborhood: " Saravanampatti, Coimbatore", hours: "Mon–Sat 11:00 am–11:00 pm", openHour: 11, closeHour: 23, isAvailable: true,
    diningStyle: "Casual Dining", parking: "Street & Valet", payment: "AMEX, Visa, Mastercard",
    additional: "Banquet, Bar/Lounge, Beer, Cocktails, Corkage Fee, Counter Seating, Dancing, Delivery, Entertainment, Full Bar, Gluten-free Options, Late Night, Non-Smoking, Patio/Outdoor Dining, Private Room,Takeout, View, Wheelchair Access, Wine",
    website: "https://green leaf.co.in", phone: "91+ 908765432", catering: "Yes, custom vegetarian catering available",
    partyFacilities: "Separate halls for group functions and events", partyContact: "Ramesh Kumar : 0422 2244667"
  },
  {
    id: 18, name: "Spice Trail", image: "img/Res Img/Spice trail.jpg", rating: 4.9, reviews: 575, type: "Veg, Non-Veg", cuisine: " All Cuisine",
    description: "A famous Coimbatore-based vegetarian restaurant offering traditional meals.", menulink: "📄 View menu on restaurant's website",
    reviewtitle: "What {reviews} people are saying", review_description: "A famous Coimbatore-based vegetarian restaurant offering traditional meals.",
    rating_title: "Overall ratings and reviews", rating_description: "Reviews can only be made by diners who have eaten at this restaurant",
    // Additional Information
    neighborhood: "Red Cross Rd, Egmore, Chennai", hours: "Mon–Sat 07:00 am–11:00 pm", openHour: 0, closeHour: 24, isAvailable: true,
    diningStyle: "Casual Dining", parking: "Street & Valet", payment: "AMEX, Visa, Mastercard",
    additional: "Banquet, Bar/Lounge, Beer, Cocktails, Corkage Fee, Counter Seating, Dancing, Delivery, Entertainment, Full Bar, Gluten-free Options, Late Night, Non-Smoking, Patio/Outdoor Dining, Private Room,Takeout, View, Wheelchair Access, Wine",
    website: "https://Spice Trail.co.in", phone: "91+ 908765432", catering: "Yes, custom vegetarian catering available",
    partyFacilities: "Separate halls for group functions and events", partyContact: "Ramesh Kumar : 0422 2244667"
  },
  {
    id: 19, name: "Grillz", image: "img/Res Img/grillz.jpg", rating: 4.2, reviews: 575, type: "Veg, Non-Veg",
    cuisine: " All Cuisine", description: "A famous Coimbatore-based vegetarian restaurant offering traditional meals.",
    menulink: "📄 View menu on restaurant's website", reviewtitle: "What {reviews} people are saying",
    review_description: "A famous Coimbatore-based vegetarian restaurant offering traditional meals.",
    rating_title: "Overall ratings and reviews", rating_description: "Reviews can only be made by diners who have eaten at this restaurant",
    // Additional Information
    neighborhood: "Bannimantap, Mysuru, Karnataka", hours: "Mon–Sat 08:00 am–11:00 pm", openHour: 9, closeHour: 23, isAvailable: true,
    diningStyle: "Casual Dining", parking: "Street & Valet", payment: "AMEX, Visa, Mastercard",
    additional: "Banquet, Bar/Lounge, Beer, Cocktails, Corkage Fee, Counter Seating, Dancing, Delivery, Entertainment, Full Bar, Gluten-free Options, Late Night, Non-Smoking, Patio/Outdoor Dining, Private Room,Takeout, View, Wheelchair Access, Wine",
    website: "https://grillz.co.in", phone: "91+ 908765432", catering: "Yes, custom vegetarian catering available",
    partyFacilities: "Separate halls for group functions and events", partyContact: "Ramesh Kumar : 0422 2244667"
  },
  {
    id: 20, name: "Annalakshmi", image: "img/Res Img/Annalakshmi.jpg", rating: 4.6, reviews: 1075, type: "Veg, Non-Veg",
    cuisine: " All Cuisine", description: "A famous Coimbatore-based vegetarian restaurant offering traditional meals.",
    menulink: "📄 View menu on restaurant's website", reviewtitle: "What {reviews} people are saying",
    review_description: "A famous Coimbatore-based vegetarian restaurant offering traditional meals.",
    rating_title: "Overall ratings and reviews", rating_description: "Reviews can only be made by diners who have eaten at this restaurant",
    // Additional Information
    neighborhood: "Spur Tank road, Chennai", hours: "Mon–Sat 09:00 am–09:00 pm", openHour: 9, closeHour: 24, isAvailable: true,
    diningStyle: "Casual Dining", parking: "Street & Valet", payment: "AMEX, Visa, Mastercard",
    additional: "Banquet, Bar/Lounge, Beer, Cocktails, Corkage Fee, Counter Seating, Dancing, Delivery, Entertainment, Full Bar, Gluten-free Options, Late Night, Non-Smoking, Patio/Outdoor Dining, Private Room,Takeout, View, Wheelchair Access, Wine",
    website: "https://annalakshmi.co.in", phone: "91+ 908765432", catering: "Yes, custom vegetarian catering available",
    partyFacilities: "Separate halls for group functions and events", partyContact: "Ramesh Kumar : 0422 2244667"
  },

];



document.addEventListener("DOMContentLoaded", function () {
  const params = new URLSearchParams(window.location.search);
  const id = parseInt(params.get("id"));
  const r = restaurants.find(res => res.id === id);

  if (r) {
    document.getElementById("restaurant-img").src = r.image;
    document.getElementById("restaurant-name1").textContent = r.name;
    document.getElementById("restaurant-name2").textContent = r.name;
    document.getElementById("RestaurantName").textContent = r.name;
    document.getElementById("restaurant-rating").textContent = r.rating;
    document.getElementById("restaurant-reviews").textContent = r.reviews;
    document.getElementById("restaurant-type").textContent = r.type;
    document.getElementById("restaurant-cuisine").textContent = r.cuisine;
    document.getElementById("restaurant-description").textContent = r.description;
    document.getElementById("restaurant-menu-link").textContent = r.menulink;
    document.getElementById("restaurant-reviews-title").textContent = r.reviewtitle.replace("{reviews}", r.reviews);
    document.getElementById("restaurant-reviews-description").textContent = r.review_description;
    document.getElementById("restaurant-rating-title").textContent = r.rating_title;
    document.getElementById("restaurant-rating-description").textContent = r.rating_description;
    document.getElementById("restaurant-neighborhood").textContent = r.neighborhood;
    document.getElementById("restaurant-hours").textContent = r.hours;
    document.getElementById("restaurant-dining-style").textContent = r.diningStyle;
    document.getElementById("restaurant-parking").textContent = r.parking;
    document.getElementById("restaurant-payment").textContent = r.payment;
    document.getElementById("restaurant-additional").textContent = r.additional;
    document.getElementById("restaurant-website").href = r.website;
    document.getElementById("restaurant-website").textContent = r.website;
    document.getElementById("restaurant-phone").textContent = r.phone;
    document.getElementById("restaurant-catering").textContent = r.catering;
    document.getElementById("restaurant-private-party").textContent = r.partyFacilities;
    document.getElementById("restaurant-party-contact").textContent = r.partyContact;
  }
  // else {
  //     document.body.innerHTML = "<h2 class='text-center my-5'>Restaurant not found</h2>";
  // }
});

// Restaurant Templete End


// Open and closed function start

document.addEventListener("DOMContentLoaded", () => {
  const now = new Date();
  const currentHour = now.getHours();

  const cards = document.querySelectorAll(".restaurant-card");

  cards.forEach((card, index) => {
    const restaurant = restaurants[index]; // assumes order matches

    if (restaurant) {
      // Set data attributes
      card.dataset.id = restaurant.id;
      card.dataset.open = restaurant.openHour;
      card.dataset.close = restaurant.closeHour;

      // Select status display element
      const hoursEl = card.querySelector(".restaurant-hours");

      // Determine status
      let status = "";

      if (!restaurant.isAvailable) {
        status = "⚠️ Temporarily Unavailable";
        hoursEl.classList.add("text-warning");
      } else if (restaurant.openHour === 0 && restaurant.closeHour === 24) {
        status = "🟢 Open 24 Hours";
        hoursEl.classList.add("text-success");
      } else if (currentHour >= restaurant.openHour && currentHour < restaurant.closeHour) {
        status = "🟢 Open Now";
        hoursEl.classList.add("text-success");
      } else {
        status = "🔴 Closed";
        hoursEl.classList.add("text-danger");
      }

      hoursEl.textContent = status;
    }
  });
});

// open and closed function end 


// View Menu Start
const orders = {
  r1: [],
};

document.querySelectorAll('.add-btn').forEach(btn => {
  btn.addEventListener('click', () => {
    const id = btn.dataset.id;
    const name = btn.dataset.name;
    const price = parseInt(btn.dataset.price);
    const existing = orders[id].find(i => i.name === name);
    if (existing) {
      existing.qty++;
    } else {
      orders[id].push({ name, price, qty: 1 });
    }
    renderOrder(id);
  });
});

document.querySelectorAll('.confirm-btn').forEach(btn => {
  btn.addEventListener('click', () => {
    const id = btn.dataset.id;
    const seatInput = document.getElementById(`${id}Seats`).value;
    const date = document.getElementById(`${id}Date`).value;
    const time = document.getElementById(`${id}Time`).value;
    const request = document.getElementById(`${id}Request`).value;
    const itemCount = orders[id].reduce((sum, item) => sum + item.qty, 0);
    if (itemCount === 0) {
      alert('Please add at least one item to your order.');
      return;
    }
    if (!seatInput || seatInput < 1) {
      alert('Please enter a valid number of seats.');
      return;
    }
    if (!date || !time) {
      alert('Please select a valid date and time.');
      return;
    }
    alert(`Booking confirmed!\n\nRestaurant: ${id === 'r1' ? 'Annapoorna' : 'Saravana Bhavan'}\nSeats: ${seatInput}\nDate: ${date}\nTime: ${time}\nSpecial Request: ${request || 'None'}\nItems: ${itemCount}\nTotal: ₹${document.getElementById('totalAmount-' + id).textContent}`);
  });
});

function renderOrder(id) {
  const list = document.getElementById(`orderList-${id}`);
  const totalSpan = document.getElementById(`totalAmount-${id}`);
  list.innerHTML = '';
  let total = 0;
  orders[id].forEach(item => {
    total += item.price * item.qty;
    const li = document.createElement('li');
    li.className = 'list-group-item d-flex justify-content-between align-items-center';
    li.innerHTML = `
      ${item.name}
      <span>
        <button class="btn btn-sm btn-outline-danger me-1" onclick="decreaseQty('${id}', '${item.name}')">−</button>
        ${item.qty}
        <button class="btn btn-sm btn-outline-success ms-1" onclick="increaseQty('${id}', '${item.name}')">+</button>
        <span class="ms-3">₹${item.qty * item.price}</span>
      </span>
    `;
    list.appendChild(li);
  });
  totalSpan.textContent = total;
}

function increaseQty(id, name) {
  const item = orders[id].find(i => i.name === name);
  if (item) item.qty++;
  renderOrder(id);
}

function decreaseQty(id, name) {
  const index = orders[id].findIndex(i => i.name === name);
  if (index !== -1) {
    if (orders[id][index].qty > 1) {
      orders[id][index].qty--;
    } else {
      orders[id].splice(index, 1);
    }
  }
  renderOrder(id);
}

//   view menu End

// password Validation


const form = document.getElementById("signupForm");
const password = document.getElementById("password");
const confirmPassword = document.getElementById("confirm_password");
const errorMsg = document.getElementById("passwordError");

function checkPasswordMatch() {
  if (confirmPassword.value.length > 0 && confirmPassword.value !== password.value) {
    errorMsg.style.display = "block";
    confirmPassword.classList.add("is-invalid");
    return false;
  } else {
    errorMsg.style.display = "none";
    confirmPassword.classList.remove("is-invalid");
    return true;
  }
}

password.addEventListener("input", checkPasswordMatch);
confirmPassword.addEventListener("input", checkPasswordMatch);

form.addEventListener("submit", function (e) {
  if (!checkPasswordMatch()) {
    e.preventDefault();
  }
});




// // Form Submit
// document.getElementById('signupForm').addEventListener('submit', function(event) {
//   var password = document.getElementById('password').value;
//   var confirmPassword = document.getElementById('confirmPassword').value;

//   if (password !== confirmPassword) {
//       event.preventDefault(); // Prevent form submission
//       document.getElementById('passwordError').classList.remove('d-none'); // Show error
//   }
// });







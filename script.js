// The following section was created with help from Jignesh Patel,
// from his website imjignesh.com
// URL: https://imjignesh.com/how-to-trigger-css-animation-on-scroll/

let sections = document.querySelectorAll("section");
let options = {
    threshold: .35
};
let callback = (entries) => {
    entries.forEach((entry) => {
        let target = entry.target;
        let pageName = target.classList.item(0);

        if (entry.intersectionRatio >= .35) {
            if (pageName !== "home") {
                let headerItem = document.querySelector(`header .${pageName}`);
                headerItem.classList.add("active");
            }

        } else {
            if (pageName !== "home") {
                let headerItem = document.querySelector(`header .${pageName}`);
                if (headerItem.classList.contains("active")) {
                    headerItem.classList.remove("active");
                }
            }
        }
    });
};
let observer = new IntersectionObserver(callback, options);
sections.forEach((section) => {
    observer.observe(section);
});

/* Event categorization uses Akure, Nigeria local calendar dates.
   An event is considered past from midnight on the day after its end date. */
(function () {
  "use strict";
  function dateInLagos() {
    const parts = new Intl.DateTimeFormat("en-GB", {
      timeZone: "Africa/Lagos", year: "numeric", month: "2-digit", day: "2-digit"
    }).formatToParts(new Date());
    const date = {};
    parts.forEach(function (part) {
      if (part.type === "year" || part.type === "month" || part.type === "day") {
        date[part.type] = part.value;
      }
    });
    return date.year + "-" + date.month + "-" + date.day;
  }

  function updateEventSections() {
    const upcoming = document.getElementById("upcoming-events-list");
    const past = document.getElementById("past-events-list");
    if (!upcoming || !past) return;
    const today = dateInLagos();
    document.querySelectorAll("[data-event-end]").forEach(function (item) {
      const endDate = item.getAttribute("data-event-end");
      const isPast = /^\d{4}-\d{2}-\d{2}$/.test(endDate) && today > endDate;
      const destination = isPast ? past : upcoming;
      if (item.parentElement !== destination) {
        destination.appendChild(item);
      }
      const statusLabel = item.querySelector(".event-row__status");
      if (statusLabel) {
        statusLabel.textContent = isPast ? "Completed event" : "Upcoming event";
      }
    });
    const noUpcoming = document.getElementById("no-upcoming-events");
    const noPast = document.getElementById("no-past-events");
    if (noUpcoming) noUpcoming.hidden = upcoming.children.length > 0;
    if (noPast) noPast.hidden = past.children.length > 0;
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", updateEventSections);
  } else {
    updateEventSections();
  }
  // Keep the categories accurate if a visitor leaves the page open overnight.
  window.setInterval(updateEventSections, 60000);
})();

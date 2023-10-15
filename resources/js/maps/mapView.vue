<template>
  <div>
    <div id="mapContainer"></div>
  </div>
</template>

<script>
import "leaflet/dist/leaflet.css";
import L from "leaflet";
import * as locationService from "../services/location";
// import "../public/Tween.js";
// import "../public/leaflet.curve.js";

export default {
  name: "LeafletMap",
  data() {
    return {
      map: null,
      address: {},
      error: null,
      // Make it possible to conditionally render
      // elements based on if the geolocation API
      // is availabel or not.
      geolocationSupported: "geolocation" in navigator,
      loading: false,
    };
  },
  async mounted() {
    // this.map = L.map("mapContainer").setView([0, 0], 18);
    this.map = L.map("mapContainer").setView([-1.692603, 29.238165], 15);

    L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
      attribution:
        '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
    }).addTo(this.map);

    // Récupérer la position actuelle de l'utilisateur
    // navigator.geolocation.getCurrentPosition((position) => {
    //   const latitude = position.coords.latitude;
    //   const longitude = position.coords.longitude;

    //   // Définir la vue de la carte sur la position actuelle de l'utilisateur
    //   this.map.setView([latitude, longitude], 18);

    //   // Ajouter un marqueur à la position actuelle de l'utilisateur
    //   L.marker([latitude, longitude]).addTo(this.map);
    // });

    this.fetchAddress();
    // Utiliser un mélange de renderers
    var customPane = this.map.createPane("customPane");
    var canvasRenderer = L.canvas({ pane: "customPane" });
    customPane.style.zIndex = 399; // mettre juste derrière le panneau de superposition standard qui est à 400
    // L.curve(["M", [50, 14], "Q", [53, 20], [49, 25]], {
    //   renderer: canvasRenderer,
    // }).addTo(this.map);
    // L.curve(["M", [50, 14], "Q", [52, 20], [49, 25]], {
    //   renderer: canvasRenderer,
    // }).addTo(this.map);
    // L.curve(["M", [50, 14], "Q", [51, 20], [49, 25]], {
    //   renderer: canvasRenderer,
    // }).addTo(this.map);
    // L.curve(["M", [50, 14], "Q", [50, 20], [49, 25]], {
    //   renderer: canvasRenderer,
    // }).addTo(this.map);
    // L.curve(["M", [50, 14], "Q", [47, 20], [49, 25]], {
    //   renderer: canvasRenderer,
    // }).addTo(this.map);
  },
  onBeforeUnmount() {
    if (this.map) {
      this.map.remove();
    }
  },
  methods: {
    async fetchAddress() {
      try {
        this.setLoadingState();
        this.address = await locationService.currentAddress();
        // Reset the loading state after fetching the address.
        this.loading = false;
      } catch (error) {
        this.setErrorState(error);
      }
    },
    setErrorState(error) {
      this.error = error;
      this.loading = false;
    },
    setLoadingState() {
      this.error = null;
      this.loading = true;
    },
  },
  render() {
    return this.$scopedSlots.default({
      // Data
      address: this.address,
      error: this.error,
      geolocationSupported: this.geolocationSupported,
      loading: this.loading,
      // Methods
      fetchAddress: this.fetchAddress,
    });
  },
};
</script>

<style scoped>
#mapContainer {
  width: inherit;
  height: 100vh;
}
</style>

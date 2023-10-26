<template>
  <div style="height: 100vh; width: inherit">
    <l-map ref="map" v-model:zoom="zoom" :center="center">
      <l-tile-layer
        url="https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"
        layer-type="base"
        name="OpenStreetMap"
      ></l-tile-layer>
      <l-marker :lat-lng="markerPosition"></l-marker>
    </l-map>
  </div>
</template>

<script>
import "leaflet/dist/leaflet.css";
import { LMap, LTileLayer, LMarker } from "@vue-leaflet/vue-leaflet";
import { onMounted, ref } from "vue";

export default {
  components: {
    LMap,
    LTileLayer,
    LMarker,
  },
  setup() {
    const zoom = ref(17);
    const center = ref([-1.67409, 29.22845]);
    const markerPosition = ref([-1.67409, 29.22845]);

    onMounted(async () => {
      await callBackMounted();
    });

    async function callBackMounted() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition((position) => {
          center.value = [position.coords.latitude, position.coords.longitude];
          markerPosition.value = [
            position.coords.latitude,
            position.coords.longitude,
          ];
        });
      } else {
        console.log("Geolocation is not supported by this browser.");
      }
    }

    return {
      zoom,
      center,
      markerPosition,
    };
  },
};
</script>

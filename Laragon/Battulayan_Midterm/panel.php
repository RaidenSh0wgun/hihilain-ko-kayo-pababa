<?php
include_once "List.php";

$manga_id = isset($_GET['manga']) ? (int)$_GET['manga'] : 1;
$chapter = isset($_GET['chapter']) ? (int)$_GET['chapter'] : 1;

if (!isset($manga_list[$manga_id])) {
    echo "<h1>Manga not found</h1>";
    exit;
}

$manga = $manga_list[$manga_id];

function getMangaPages($manga_id, $chapter_id) {
    $pages = [];
    if ($manga_id == 1 && $chapter_id == 1) {
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhmeIVRXiY92sq4HE4lJ_258v-pIF0EIjtaVP0SCNvULoEwxqywL0F8lAUNXK7-OUCN8YHHGi0RJZd9IxNHdduO8mMpcMWk-tnUFyPzEps0JBGkmhREQhWOCj_z_SVB710FacUfKXlpb9aCWCRA0qVr7jMbyPbvs5G5PBgFG1zm-oSjZQ-grfP1M8kZFQ/s1600/03.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgC7IDqoufJUeLxOHqrQ2chmQd1xXgtzn1mCx4hEhWcapyIewud2CFX9iSYUPU2WqAUexF72cxzQbyX-8mvTZux_LHyewska8sZJMPF5geg79hQaVh8oAvFTBiqaif_WiShg5FWDlcCUZxfgGGwFgxDy1SPVM2s0vuUMPvOQn9zT9jWHsvrQRBxuLM71w/s1200/04.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjMCbcib6Xdzn-EaFbesrwW54ouBUF9OxgHyOGeKWSM3Jg3nv6CHw7rmhu0okg7MemgrjxmI25akJxg2iJAInfCzihpKlaJtOJqseQ4Vwd6vM3vl2fJJ7UTX8Ap6qV8ZpPSdMZ_w-KcM_nCdQkkE8pgAX1yGbqlt3gbPoxsCPz5mOrVOPO2M3Ck_0jtsA/s1200/05.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjFLKSokfrFhBLT8ocY6JzQHrS32BEl5YVctFI3ZUik9wM6Hqy8B31QPWf-h8FNMlJwxI7rGWkCwAJ251BB5BKvySp26RMWrLa5s8efbi0HGW6zHfgGw9hSn5h58YgXSaSCrJ822UruvLf41ntJ2UwYgf0HQDR4dgFFzIXQGVnL1WzcsAOF9Ehy9ruz7w/s1600/06.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjR5tYkRN_C-32PLbVF5LmjwTC-fNvA9721Q44y-QPsPQNuyxBmEpWDc4FrqBUazrdNz6QMsK1pbaOnP9SkXCGzYCUDjcUNbu97ZJmoDUIZmrKGxQ6THZtnsiyzvuuvjt9TXXNtXTz2G1wpwUR2_Z37poosHu3Yxi2e2O3nuqhWzsfVUGA9_f-3Vm8sCg/s1600/07.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEi_TqKZaTqmEXhAhJn9QDUEelhDO-yb9BkxWbAFzMj-vKU_oyZC8BCVRpXJUbrmlCp_XvyajNWzamk4E7j56OH9M8LH49e9Pli8NTZ_CJTRtcvTVQ7e3CLhy5vGewyEUC9yI4kkx7bhq5UH5zpAksyWh7CvvRhVl7gWWNApQ0GfDGI9KGSljO8ucIetsQ/s1600/08.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhyMYlHhaVam7c-b-J3v_lqH5r7Aay8NdLac6lEzRIuAtcoIxCJb4AFbMd8Yvgl-ZD7OpSjahc5NpeC7mQE-Btaw45XPBpaQfrBX2arEqr20aQPrmCzncdcadKoZ-n00xTa9m8gtY6AATBkqEh-5NccsfeJGF3-wGI09O7VfE5RL91_F8qg-Nr7lwd7IA/s1600/09.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEitGdFeiarJD1jvirqG4Qs_QZ9kwZ1lWmN6Xd82AP9pPKUgwQlYI1t7rXhTjCek6D5ZNA-rrJukc_kWuNvi9KrSJNZDcItGvLwWIuDMrnfZX_a0mR2AK5yJc1WkkhvSynYNPJM0r9PJgBU0jyxm09boUpszWI0xwrYJHIjU95kcqDaPpXv7Rb2Gy7Smiw/s1600/10.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgX3gwDmUG3b2yg9Hm-T1vcXNqCHiHDt6bF30_GC2TTh_hnKJWGuRiDJTPj9nztb4MGOLVn5v5uFY3PwMBp26XXHJBfJhKNbCIjebOcWezw6pmSmCe2Om8Ex7uLM6T_qrQQdu_9Vs1C_7T4NYvycFQEeuEhFLamKcmTYp4qJrmuKCAhkZTVFI5SJeYtzg/s1600/11.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEi4QvMZlcngW8ry1qN_nBjdZ-5GE9dmAPRE3k7t9XGUxLpeA3gm-p_EanHD7oQjjI0TDEg6YO46c64FyYNuTJ2rdQgySK8CPBs7p2f7w4sQ8eJ0txFTsqOuJJGOdUDfypVhmbalXWEQdBDKp7P29KAdvI7eisZGZwzDfbY4IfXGuMTxhIlNWzpRm4xNhQ/s1600/12.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjP5XCyJ5ab87-jlOloxWW6P7e92Gfuct11OiE1FhGYiDXzs2r2HNbNZztJageSeUQyX4Li05AfiFlWRRqKHbM1b-r8hyXGsIK7c5ZwA-qFj7URTw3NCQyXapidxaKukk21Yw3aZLgwzo-cU9JZrXBkAQSfdjxvNVh3Jrj7w6qNGHpi6S0O_OcmYdpm6g/s1600/13.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiQhFviODNWaBIqMMvo3uySSMBb2UHHFKPtf3GLqmnqu0Z1V4ajzLpRJlOVMzKtSr7yF5Jbh-pkMSPPgauirR0oxcuGLIdacxZ6l_uttNj5y5mxwdE77BrdfHTxqcuQoG0iYsz4wLWSMvR-Uts2RAGBPWRs9rDKnPFcBGnztw2VklXsGElWACQ7HyUYdw/s1600/14.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiANvAmy_izWBElEFAGwiynP1j9HFIZN-Uo1DSWlbmB9t2gcXd2rHI2o_dKLOp02rTF8GQ6W3lB3ZRmVej1Flz3lNhT178LWy4zSN--sd3C9ef9EmytM_xNcxbISTIuqXeyXtCtQPFabVDjyQFqbXfrIQi0emTQE4uhjdpfQjUTQPiP03qgFjg9pYoj-A/s1600/15.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgkgY1lvbzic3LfNVlO0dWo3WRKih7tTSEYMTWbqaAYY3wknY-FjMImoSiY3Ef_vT7De2-sEHJcozc8C51OPJqMBCJ4GGuLUdZx6faAxDGYB0f1UvhYqlwbG3wfWJtdtz2cqYnzTZMEa2dyaeYyatmewQwrDb4cCkJ9FTH8WTCmAmD64nY-ISPsPux7uQ/s1600/16.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhZGoUAE1hA1d2Mux4kfdVe6Wgljj2GUPKhqNtx8nh6nZoLXot4AoK4a1hDYwiOypMmjScp7u4GcDCQGps1OkKjCSXUIc3azIa2wTwM28P_9GoMpyMGKEMfUndqxCuZHQAwmsuBae4LGTixOLVb3fgWQ3nhmNpYlvEYMB_vBfabH_79Zgm_uFZ5DgbT5g/s1600/17.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEi7kPsVPpRIU6BBehUc3gFBcEZWTPFhxaDPrPmL0YPrxwv0Pjef6O70T9oZucrunfQFSiC6eMwaRJD54m2bHVGTqCypScGNO79dDPpbxADMC6Fe_1WSpASJRwZ3TpqTSgX8zn4otbdvklyczHeLb-UI5hXzJSjRCcKTY2lEndvYN2ApNFHXrjCYOrXghw/s1600/18.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEi8sbqlvzOkmF_41zNDlTjfPe2nCt6OOkVonutwpSUGb2Do6ZvuDv4VW0Gpma-8j8tyD2CCJ5VOk7W_d-kZt8ezGLdsQAw8bLblSHt-v9q4LE8v2A38iBp7cdftLX7qRtPbAJ47NKzW6RH8_vCuaSWD1AxacZRfx9oSxtrjC8CcZcBF3_e28mBV11W8qA/s1600/19.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgmtSPnm2bSC4-KJbmPPnaON7uNiFQfr50vBTbn1G7TgGDnpe_s7bl6k_W8dsuwXMOfF37PG4RVrXkMGbYgcMYJT-RnmfphAiyGhZHh5cCsHKMvdodHtYaRdlRK5wwGuDmK5s19p2GIQdKsNom1XmSsZo9veiLWvfBtjOc5EePAR9jaaFmNLJJPtFfwDQ/s1600/20.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjoDX99S7e4xAgJpaxHGZhWuE37fGomyGL8S50EgM28qM9zi5opKs7-oi10wFg8-Gpzx_ZBtjSmGLvLYiK3mfCkfqEx8zSqdzcTg1I1NGoQkZLHWPIveJQJoi_r5ixkcGfa2tW7K3AfgPjwgZKw4IUzKdKhFlye9eseoS-JBBPFkYORfngh6L5oXR2nfw/s1600/21.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjgz0BxaKbMOg6IfWTsAEC8gKEqnzUR8tw-Qy9vjlGTk5BBAvtjJ9AlKf6ei1PPU71H4GoAQBKVfEQHRdqMLyXA75zQzqTIGcP34ffwWivExhg-_GS0FpNGr33kK-et8j2_y0YjcjKDt6TiIp4mpFIU50x6MXrU0P3MHYuWjb_gKlXuuwOZmyjF1mo8pQ/s1600/22.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEh-lok3ze4cXoT2roIcX7f2_m0rtn0rKTTsksoqyOOTvwAdtwfTDNL_m-mVlzSF2-ddd__i8RG8khwegfF11bI6TCz8XVP8bvivxR7Z3aUnpxv2TY0__LOYrH4A5gKUGBVsUL_UTU0Bs7cnNwAyRFEe198AeCopxYHxYs9ltd8uumldfoD-Zrczb3BDWA/s1200/23.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhL0XhB9shUr0Gqx2ztsXdUT58tqfXW8_mn-Q5yDyw9rieISenezU110uDDwrTTjMpzvmFIiWV5pO-K705kgTZgVnPbozCfFGOtBxZz8WDwFCS_xF2OCKncvD21kwqKicQ7xRVLwfSrkbTBcRJ-yX0LUuIi4Bmpt1JgCwCGJeY8w5Rp6RWVfECRSYn3Lw/s1200/24.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg7IvQFquQ7F1rAnR4PNTsLpMUWncmGpbZ7Dw1xTLMXDP9kp21a77RNAOyg6OhITqK375n8fLWopvFOP_xoiC54TOLcjjyP5D5U6dqMBmVtg1jmxF9IU6GwMiLpniMD8_1PEULXEfHb2q4EkWIyela8g0YZIEBVRYqwTs4Uxhmx9GvUeSA1gJXpp02xQQ/s1200/25.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiq6bXH0UJHosRC9m84arFCYoz45c599GMAAfNnEFLui0YqjITtq0sYQ-d8T4c72wDIh9ubOIJnP7stGB0jK8UNDjJQpRv_nsMtRCAciORZafOaB9l83hRpsu3JtUHEk9nt3Bwksy4UWtxUrB2wNKShiixUG7zZiHSggj1EcyK9pKAAHi1Gw8WWIQhg2w/s1200/26.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgIwJyVttNnFF_BAsCmWHAF-3ygoBeV-esnJjun0W-DYxYzAzeZwfTUULQY-JlMDhUPiqm7c-4KK5UfVB9o_ZKOHTE1FQdZGW4Xqh-y6jHliLG1lem064yijU_SzApa4iiV7GMrrXEOog-zdEfq2w9lFTgkGSK8NW1nYs7m1ie92XJ4ji5BID6b9neUeA/s1200/27.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhtPR6EphJ29qm1XKO1XG-QwW2Irwzzh8QdSo9IVgNn7wuhRWscwmEOaHT-Vo18pGkbK3rDYkGWUa4EzocAG5l94WlPeoF1vJb_h7Tf84hYRH8QENAFD9fv9ylmXTM3-Mmq-lfgopSjlktirbGiFMmHAx7NIGWgQ6yMEqU_u0yPFeT4I10bDzfFpFtFEw/s1200/28.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEh-GSKLh0NlbLcSIJfGxMh9vOVTH-Z6g5KxxRYd6vIxYVZzD8nj5fCUFEAXlApU5HxuMne22NJs784LufhrFZd3lHqUHw-55XEshdmTIgX_ZdxwEroFbGmy2W9ZsUKrnsMpJPliTN2gs69ls5V_Q0PKIByKu-pL2TLVOy0P2cuePq4drMBb6KIyu4UC2w/s1200/29.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhmOHoY88CC1m-JD4omz_Gv1iaM0O74ALFkHSJhIB14q4hxqICkNq_VQVcFICeuPLvA7ZDg5_q0z3DP732eZVe95pxdw74mfAIASGPM-aXlJwyTBk9bFokiqRDOouWk7dvyxBnqSU84o8_14ou6sJuYwDk39ki89ibuHOF5jH4iGSsqKSdCjC19gHy8zA/s1200/30.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjhTwvKCoRABsIBhvVLmnPKNYj8XdlPsMXrOz6NMft42xfxbIp_NZcCkT1P5iulcFKWJ9cLJAW9k2y1Js6dF9JFuhRUsib1JXhh1GaGJeclhzuLHQSu3CFRkDezuGTz8UYfyONi9fwzTxrYoeVUE8k5te99uzOUTPB1MQ_Vt4Cb5HLZS5Vidk9hIcwclw/s1600/31.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEje1sdByX8ADkWpQ3eH_Pt2tudqwu_bZO2C1ehDc-fzplr2ncLRoZ2sF4CEEK85QlxRNAaixJWEgvq4iEy246_zq49SGqEIluYNJcThJfX5vNxVPqa7UvoWHl2fVqzkn0R5xVGIZ0CtKuiCNJCtktCC2syVhmF695uuXFnO4PwhAoKw1A_td5Cce9vUng/s1600/32.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEj9-V6RVthtfEmlvwWJy11tqE0MydZjADjsBZsVWQcVjvMYf6ROUjfg-NMKyvEAtjBJreNehS_ozh41XERYSkW8nOuELy2xnFsJBvYdHJZZRkKluOS5sddJsayfh7O0tDnuIVYtYnAeTY2g83OI7xj4l_pz7vrnYnZaWiTdaXRZknxA0_FfXHDz5EfYpw/s1600/33.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiBZE6r1bsYLNkewKwMs05ruGPczhKjY2xVKcn4UnWUmOSSltPNmot0Q0OBHdaFWFBADSkExcLB-PuXN8u6I5KwmROhr0BVYcaqQjvyuA0LEXoG9WzCpzmcjEhDSi0rqBlzj_g2zjc-1vmGusohnD1IxOJqrjjOD8LvmqJMgsAIiJJDthhxKoEhpNw9ug/s1600/34.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgK7IoeUIGaunIGmlK0cQUXdRsOu6u5dIKiF_PW9bcMkUwKM4YFHEmBdhCcib1ZiMbVdQcnqI5jd1hSCxnocifW25bb_oiFBGpgpxHpWOaUaVF_I89D4RcWmiSsfJNl0mxyXuCclzKzAeVHuaFXQckAOOonU3f1sf17iZz-z6ttEmR1Q_EKBZmtQz2rkw/s1600/35.jpg";
    }
    elseif ($manga_id == 1 && $chapter_id == 2) {
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhrXhrFb8QKCznM5O-Qr-EcUOEoE_iaqgBZAL4pIJyemHvsifch1FwPDaD7qiU8yb-UYCn5MZOyn0WojDJ9tJupPjtZdFOAYrz51ZwGfLOc14Dxtey_ulTYh98QRUZgEd6Qvj37ZwZvNdQ_arfUTgTOXJbYMchysolQN_NM2FQ2yVh_33Uuagnkogf0Ug/s1600/01.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhuYjYFOgS2RnEEfkKtCERvsKUs3rEzUcLgu2kjrNp_ULJDV3oPi_DI-yMKvgoi4HyzBeYRr4LX4D6RKGwYGm7Eok94HDCgqrrUlVdEcfbtuQrS_p8IESGXqPXtXw_Nb2LctS3rm1oBBvwOXZ71jC6y2ZY-5wiOuNwXUbI1-yL0_isn2NyCHZiJdzpItg/s1600/02.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjHRrzGkY7h-ICP57-eedMxCuku89PBWTymP8dqEu0zRiMVFmEVGmCBM1tM52zb-tOLzf34jGEYvc0FDcN4JxxYqc6opSY_IQSKXbv3WzaYWYloaDj59iAZotha8ElJrXbm_4BjcxfqYJ1KqQf1CQb1Kuht_rGWC74noDZsBOqahsPwsZ2D6-xStqHzow/s1600/06.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgeL6qUPWGwSAzORbDB2kAZgkko86Ov8Pgn1uFF7C4JtwAnW3DJnGBMO-WJZdF8VPv8rxdQHRRxbaT5NNfdIzLOT8NHgmfaNxmYge5edOMcCKC-7AoteOr-FaOLAzBT-3FTKRzOoK-o1nH9whekP5Yo9oM1MCRO_vN6_hdHwv4_urgwg_xowJIwM7soXg/s1600/07.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjSf9D42g0DoTKTQhxoQf1xO4EiDWNSiTjtrArsli8I8nezkDdGbjHFEv66RGCSOt6kjVOhEE4a-oFyIcZGXhkqhHH_uATRH7c1W0eEBNvDoIhtsdjo8yAek2J3EwAS4g1dPC_gO1nuRUw7xenvGKn8qLGgpcrwC_p55T68hmnV_cD_BgAOiTrNeUcvqA/s1600/08.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgyWO35VD1G57Hu6CVkWl5iHM1j0R8drJdvlLrvIYiTOJrhzlmB4lDYc5oMcyvTyomvicOZj0hYMN_yQt4j-mMdx5aXCCnyY192VnVDvg50CfjFBMSZdz8BjLJaRYbps-OtVUZKiioheUd3aVhIubiWTN32ZNNkal2OxaJulAlUgi8E7AhfJIwOfTBnjg/s1600/09.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhn2YCDL8RIz3VZkdRhuF6mz_Fsmhue-6dbv16rlxyh10eXFrQSqXuAGx4TsvFDFn7_e5NLu-qIWSlh_EZtgQekxKJW14vJvtF4OcDAX0t6jqFvRB512mh2bX2HOQT9cFMtxITqNsZAOtcm39U8VCwV7SxN0hz-GRHTaa1VxeCurGJIMFS-df4lNItA7A/s1600/10.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgO5X2TG0XP0J6XN7o2Oe6-PyCH7nR92V-m4gQWlu-ZTpT3E-LGMSEyXuyoVpQtIpf1iNa54VD-GKFH0ThWZVe9jJq_qVFHQ1qATKqGoyZPFI1BNfIPZ55p04hN_mSB09j7viLr8BUex90MaLUEuw_RPNK3d8eE4myVwznG8Z4Xu6bVey8wlRQF_kWN2g/s1600/11.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgsxNG3vDv6821dJeePC6l2hWBJEap-Hp4f665zU3HVoNupE-6XPwKmi7g3Rtb-2dQePDB_8FzcktBwUGQD3qClzXo-tZGEBJJR1cLzhVfgMo3yA37ANCdiFTC25pQzEpoy-QB46elzae2SiqwcIjjf1VeOC3vNdhiy3hc0WdgW2wf2XdaTocVFyH585Q/s1600/12.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiJmVWcs1pMkgKT2sv_34ShTBtX7KNnB9xjR6iGH-WMlIjE0pnFsQ2cf856GOsM31q9iykemDmDXh3VLCk3HX29mkJJHoydptg_eKNaujU_ZY4fnuXAs_LYIw7cqSdfu1KKL9XGyfRINhFKnPP6kuVql-we4_Npu9JHlNPYlrldJ4oMvrb9-6MaJoDdPA/s1600/13.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgGJrTc7H4zYqe1xC_8cDFK7hWw3i3bNlh_VN230SvtpEr0fZGO7SCRwSlNXC_M2S-frs12qJWEGXdR94W_YZQPbpldAiv4SJbu6HozBmU9d0m6MdA4HxxScy4f2IIXmfXmWp0S29oHIGya7AE6mBmlMoAhQgbn4m6VY5RT008TLjMWU4iExXYXB2JkFw/s1600/15.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjpDdDbPKOPzYQaC0OpsocnhZIc70Ap859vtuop7geV0vuac4LLLD81_s-m23zIq6t9PEp2Cyq7-8ZEqGczHyWKeIfJLT8f4TUgic8RdEqlbalI0YEPHp-4L6F6ALiIwP0CTjwEphzdTYBK05W5Fudb_EuiGb-JSGFDYMoONLMrsUA5Sk8GVo1PFIjQNQ/s1600/16.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiBSBXeXsiGtThnyHG4z3qEkGHe5qkA1A-Vcv7NH3Hwio8dzkxAN2_bAWhbXFVJYUN-CPsu4V2M77RDWYQys_meCuElPiV0oOxR6Mo4pwDW7rmLTf7mmN4ndhMv8TnE1ONr5GPgY9fo9FFpwLbGgJCw-aciCDgHL-QqVO8cKpMqbx4nnsuHcm-gBY-mqg/s1600/17.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhRWMtXwVFy1ERl1wRZ_SD_F-iGeN40JGYG6KnmxtG6e_kEmq5JZyTN5RTcBFpqrW3rCHtWp2cw_RDUxmj3W_XsG49xLEJ4ineDGr1NsE2bg87LGAzyT4g9W07d45GD8JVAdqmWHXN71qSiPdUTWHGOhK46ALAmp1Rw6TFzfFSDb835hqMiJ4KaDcuwDw/s1600/18.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjiriZX5ptOSAXPtKUvwAFLJmihN-yozrych2ELfFXaGpOzRHQ0SMS_EPyw1TbeGCLjwohY8W-nW8tWCt0xF9eNf5f7YM5bSHwGQ9EOWOeSsEn5HW-OHNrG1mzzQ3xF708RwxUiSdnbiY5SBNJO_IxBPBJ0VsPJ7AQ3kp-BVSMH-0FnGo8OSufVB_6woQ/s1600/19.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEihrs94gXuLoaDM0_i36NHgMdXd3l8hbD_sHygB_JgqgPI9ttKbajlTm5a4-HP9n_NAZdklwMADYHNarFaczNUP-x1p6ovlWpLm63mImFJ3NwLr2UHVXBmxy7a3x9MnONb3Wj6_LuOCtWSuly63ZpokoVEYLdh5ngfzzm9eYJQj23jo6casduaqSIJ3EQ/s1600/20.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhTHHUvF6GbJUDWC1cptGX0jsbXe8_g-BeZ7cysO6VEMi5Kf4CwmihtatoVQp6NKujHxVywlaZzODRsdCQ2SMf8Sp_oUSBWQPc7DXuBuMV1gKU6hPD8uunYJfRMutzGr6nMg2rZfGSyBf3D7WoCy--aJPV5BBZNMtI73YL3vaeC4qwBG_50C2-z7_AgZA/s1600/21.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjY2L6kyqtloN44agUw0xhdbH5ujwQjB5uPmiVB1BPskB56GB3zcCaxO_WGhZNZLX_cixkbT7O292am7mMDKvYLwCFGnEytdkzW8hfF27Mxq1_A1ewtlFDp4NU1aZu5lSlqy9knlvRu5Pn1rS6g31vXP8CEvOw2_C9o68WXI9OMzlISuu94yGHnSz_jMA/s1600/22.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhtRGAToHrRigOzwcZHVl2pC8iL5EantrBMOlWlPZZ3D4wD8lzfMNibAkqwAjVNPNm99Jdpac1aF5tOjp1X_TnzZPsIB1mAmNY_3O6oVaNnKaxVZ1hldkZCNZW8JCpvKrSgKeuox_JzxBPGcGMsJPX8nWdS8X17bnPVGSv3Zj2Hcupn15Vz4M39_qs7vA/s1200/23.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgXMuKOiebBQm9mpakyBz8CfeEVW4fJENeCUJnvhYBYMjYOv_RMuaEAXyz5sT3C5LopdLWQzeFeRXoMotJqo55V2uvpH3Vod5GPDv1ApsQopIOV5VKQ5Oh3MNhJaj-mu_HVrKoXLVZJM_-mL10-4eeNYEfvSafKbHEKzoGU1iLnB53Mx9iiebBALKdQOQ/s1200/24.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgp4iXVpGmRCMBncwGMFjTY3Q0SXuiu4AER-pL_ZO4dxUaV1KN_goFt7aTwbyia7s4t_f5QYS5wMYcKbm10k1KW1R0YZlgGeVsB9NYysdGHuB3AnEWzWcbeVxCQQlMc9IWdohziKxi2w8qzZNHKDknCYnrSt7fidSPEEnHuvZYDtZMTdVWFN5UR731nRg/s1600/25.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjAEopNyg015o4UwFZUewVCgJwaoTgU-OHUtYNzyhI4DHDLu9plFs1aka6HHW-bKL2Nqhf46KIZ-U40laemaItk-nBBCQXyYpXXrt_iHoma5XMylsUdb4W2PnQb6k-5u1d47d_NMLvAxd3OdBl8fJlt5mmwj7VSqkjFU6O0NT6aoTzCa0v34_Cretbvbg/s1600/26.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhm033RyES7gaQ73PM4qC-NuPFQQUJ3OrTeoZkPS0PYHIj3wPfaukFPpEmw4s21hh8LLPSC9Nda05m3m1YedYimNBtEAvCphh_Tb5o8yWF7LCs_8EBlZ4w_-Ropk-1YA-SLePlzK_t0DnpzmFpzhOqqV4d6tXARNxaDSceV2UJ4tz_uH26XQMMjJ3_CKw/s1600/27.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhm033RyES7gaQ73PM4qC-NuPFQQUJ3OrTeoZkPS0PYHIj3wPfaukFPpEmw4s21hh8LLPSC9Nda05m3m1YedYimNBtEAvCphh_Tb5o8yWF7LCs_8EBlZ4w_-Ropk-1YA-SLePlzK_t0DnpzmFpzhOqqV4d6tXARNxaDSceV2UJ4tz_uH26XQMMjJ3_CKw/s1600/27.jpg";
    }
    elseif ($manga_id == 1 && $chapter_id == 3) {
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg0eZwQ4ELbpOFT9M3_SKFUd0ayykzdkGqJuAs1byBD38vkm85ZdfNNs_i6I-GIsHiCynepyLQOP8Qz44B7JU0Nks49-qcx6a2bZoZIBfJKIyYkoTwtZvdg_JXpjUe6N8Im7UjNx8ctsDQ9rNLT1fAy4zv55aA9IY91HKwZMw8yunnC736EFvRW41609g/s1600/03.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEh2RNHkUvpEUhEKMtBZkn6fR2n1m3Xga_n46eEEDCPMaaiKBjjdH6vT98XQpLtcPEjO90C5OkNE6bXFlyChexFKHhChY6tu6hp4mXhYrZjsvjcisjHqlJVDjIfiF-QFGZFrAiBz3LAjJQOqBAqfzHqp6CRA3let_f3L8ae2lKim2LxLqNoi1QTD2JfBow/s1600/04.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjuzZbymlgyOeW-SGJD2mDYfrn-SMLpjumuH4UWpBnIUkBbU1hy5H1Hyc8mZISH7IlKgadL81OZzt8RSGSAHgwzgXDj_J9r4KeMSKrKdhQspquED0KCOh1yQSl9ibtpVryjQtlH5-I8T03AAyYgDQ3XDFE46SRbJ92N5bDhtQOJXMliuZcuDi9bv10AIQ/s1600/05.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhOPPgAkhmDANJ9jMANeeV6AYsNbJYL-jo-0fG5sFReKCagOOjtbBYH5zeqJJP0oElwHFebSVM9Q8AdX-Ov0EmeZ2BiPVAasfF9DbFv5eIyDfDrrbUZoI8-XyyeR0luc7m9H91l9fVkKC4T9Mmg8WvkisBZq2UlpIMVYIGQKZB-TuCWCoppXYo2y9AbJA/s1600/06.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjmJFNW6LPv3H5NXEhlGFBCHxu-VXmLGhsKG_TyMPCmTLcQvmd71bGr8wR5o_QS0TSS1U35OCNIgUZKtkN3I3CWyXZ4sZYMSE2lzRWjL8nsP7pmCVJk1PXvmKHvfCnnu1AUGXTfuhqPSQVqZTOQfI-XTrYisidn4phclIIa-A4yCMt2lDiYw5bB3gpeKg/s1600/07.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg88ZqZYeV41dU_3MwliVqjuCbORCMg4vvBUGkNx61dzJ-3Gg1NHUy6c7oBy6tsriFZaDrg4NdHmp2VMH_rp0I0AoeNNOqCJPulMl5pxiW_VAqoHeULRgUVnp5ANql6gmyaSZptZCCytL3_I0BBk9IdhcbkOF1E7MxlH5u2Dfts7QB17Rs_P3HBrKrFWw/s1600/08.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjnX-ma8D7CS7dQhKMFzXaROPrtJqatsU6B4So7BuSA2WcG1g5Csm2-LIjo22gY_RmbP7IpyG7tZfA9pP5cTLchtii1JnW-XWJGS6eWV0LXZR5rQmgqwZbHfdqTBO6I8eJOjfggVNQgfKeONQiupHlLotvkJ94nho-JW7oRjdCprDCIboY_3DCLeBCyVA/s1200/09.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjCfrMFTpPgu4FNwA9XkTBinnfMR35Lre846QPu54OJi_7qhHbalzgioKZOJzwHuaeRiPaS_bdk7NUEdn6ZIt4OdqWyoSmdIWQC1y2Ndu7vpRozJcwC1EjixP8j_rWHiwq11s-gMeTbMNs59SKjUg9o_PAPWPqLW2eDfoKyq86hI5hq_ALoqAAAm9G9xA/s1600/10.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEh2Kjhz2tZhnJiALwoU-ChgDEvQ7LMawSgq_k5kQar2l_NaxaG57Tr5t6iwBjqy2K2OkrekH3xUP6pvw2HpTouADJQc8ccleU_9siAw_Phc_RPoRgx6tp-lz7Fg73uCbZc4sCBfHIDRlcxKFieTEk6Sh5jwVstPNM7JzmQcrr99mBdoo0BJaUyd83VA3w/s1600/11.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiubp3fBGRz2bNSIOss3MlCccMFC-I2zsfYUW307m_2beDc4GjLYw4mNqjt-x4NC_0RPjSSRPgpQ3p9QJtutqnqhcr7K-3eUNh1ALBdDvNlMMZGDSdrjcri16YqaDjKF3HLsO8XyTRGLNWX9KUHAauaW856nr2kxHwFAM9LlGWq3XrRQmfiMeB4zDx2Vw/s1600/12.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgAKX-UuVdlpayuRgE82waFNRiHRRiYjwwA2FqK6qYPfiyMAUy6UTzEBuiPZklrYmZQGWWubGIx0eODsae5yNeExT__5nq_RGpxrfJwZGT0pTfGBMBbZ7_2OhIsHyN9bir7IO-0MTGJtnJUuhSnpOZwksEAT8nNYzRs8yMmsGoytmk8N6hfTb_U3P-0UA/s1600/13.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjKhDFAHWHPZmbmB0z9AI0mIRDSCWwnU69ry-eGYCHKPbyzEMJDITTCuLWBhtCOl8D4Tcsbe5WgLfXvCzoKMpwVXVkgNLIKY1iIPq9XEWo6pDfDLYNhKT5WK6QMczUlYqQykaDyvqm__G5mebjyj9Wg3ifD1g33_26QSAF6AVjIF3-99qGF5Ow67v8RQA/s1600/14.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhz89nxIr8s4PD6Krn64GJq3WHySCEh-GQTNGKZegwG5aqnOfBfC6-GGhlzA354wThZ0cw-Ng38s0bkOUbeJZOwKudCy3VqXpRhv-nkGJ3jxbmI1ywZt7aAVhQW67L_nHkTbVaomOBN6L7Yx_sq1GZihL0d8fqFYYmYVygCWsptZUgrW0F1x2WmxfE3bA/s1600/15.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjg46pdgDQBd_bjnzZ3GiET8g_rqxZGpWJzrgtXFFqxWrgYAd2GZ54coadt9ak7W3x-H_VepKlTpXIDztXOer1roHbpdfUW2jLr88OlpiZXDUYAfRuFetxnUkOnjc8CZOFyOjYJSkC-LS8Yx4GiV0HoioWuFBOC4smuncCTqbtuHKS5jOsW52mI_5ZMMQ/s1600/16.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjjZqaaPQ9JFDGspog8-DTpQcXRSFFqZIiKmf8-M93e24jovT_SQWRlFZ79DGDxO0UG3-jCnvNDZaWprisDKsxT5fivINxTrU8k8uYJmVsD_Zoom20-Wpzbgtf0HIpny_xYPv6odOjPFcChg62lI6j7bWsnE8x2uQhNA-iHJQojtb1H9IlYrIMUASpK8g/s1600/17.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgtWVQvy7qRlB73psztbTZaQLejwd_t56FCVpicvwEpPAPiKvrlTqw3p8YxBuryF8e6Q9n7WMA_JG9vvP9VaAgGekP-_1byIhOmbeut3gFLjL9qLhdCT3paekG46imeBt2-qTrduX8YNnA42rdcdGVme5Zv4puiiX3WsCl1ZF6td1nlmVu13cDLyuNeYw/s1600/18.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjwPJ2xgkQWdCpVXIl8wNRe-9CtV3Z-ooNbicVx_AfGYoY8OnOEi9MLEF3vNeBW7mlx80290SDljMCeaZ5cKF75zqCqN8Elb5KrsnnTr-XA6fS8sG9iD6tQ6AAN3MMvzcq7GOfZ9dn0t4tUQqCcUaKkKHxPUhEX3P0RX0_SzvA_qDXCPqclmf-SVaF5PA/s1600/19.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiuLPueN4Kv3uljfJAyW77zCUrOVNbt0oQ10pC_SMjrbuHGa_5145KQ4DHvc5pkvDVFQ9h1ZlWS-izdrENaeNygqe86TXjg2gFiIMwPfLwzaBHDc-cEwtbKCliYf6Ca-H-F6IVqLdJKAd62BMYduAhbtDtq5_Nc31AY8Uz9vz_BizwKKPxVtXDHqO4C0A/s1600/20.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiMyD3xFF1CyE8il4sShXJxkqyqQxt3Qrbw7C6oy5ChwPE7vWNgKEkz-PQhTTsr6kHdXywSEs3bex5Ifcqo-Dalk2Dp9CBdfzHITi_NIIfN54DDxKfF0RsJ5H_WNVXFZSmexUgDTKmjoUhkURabfy5WqGrt3JZItfBZb_PnkQxI_n2ikDwZQbj4jSnuaw/s1600/22.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEj3yzAcmv-UB4ADP2e3yRQiLj5kUCb2G1Dm57Rbbtr4_peXaSfhcY8UljpgvD1FyqXv8WCSBqXAi7XxoIcIP0i6RSvrTipnfCmy58pn4DwjbSDl_AIbiDxJW7_nc5WeP7wKTSykvTN3RBiY_qfkHuQQvb2DdrsTtMgSRmahWO4LQvD7XpwJIeEKFEhx2A/s1600/23.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhCYZnk2_Hr1u-7y9kT_3HWp1JnWP9DN_XjT0pRzoxORZw0iebUYeY4K1QEP7nwHYxQYCoO4uqyZCClYJBbQsbFXJDFfCm1w7Fhba5oKe8SVk8InA3VveQeJvekzSzMtnR6KCZCZZcpJ8SgLq_lHgHT7rOH4dqTgBY76bDxHU1CXE2VE2ugllrjgiRNmQ/s1600/24.jpg";
        $pages[] = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjzWqBOcy1LEn2ntTHCpelhT4fTqcajzds5i7DDTWo38SJsnYqX4qrzepCKEbkouHJ38TxHINIlJC9Kg2VdFcK1YFrGXWkVzzEXvYCNcFEcyWNNhBd7xgcHJni3WsOx2PBk1iBBfYba-Zk63CtVGH-3ic4b49rlTiCq8mKbHphQJggxmK75OjAcLKJ5TA/s1600/25.jpg";
    }
    elseif ($manga_id == 2 && $chapter_id == 1) {
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/4.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/5.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/6.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/7.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/8.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/9.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/10.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/11.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/12.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/13.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/14.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/15.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/16.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/17.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/18.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/19.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/20.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/21.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/22.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/23.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/24.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/25.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/26.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/27.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/28.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/29.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/30.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/31.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/32.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/33.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/34.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/35.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/36.jpg";
    }
    elseif ($manga_id == 2 && $chapter_id == 2) {
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/2.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/3.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/4.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/5.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/6.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/7.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/8.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/9.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/10.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/11.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/12.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/13.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/14.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/15.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/16.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/17.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/18.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/19.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/20.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/21.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/22.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/23.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/24.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/25.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/26.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/27.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/28.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/29.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/30.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/31.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/32.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/33.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/34.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/35.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/36.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/37.jpg";
    } 
    elseif ($manga_id == 2 && $chapter_id == 3) {
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/2.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/3.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/4.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/5.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/6.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/7.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/8.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/9.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/10.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/11.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/12.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/13.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/14.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/15.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/16.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/17.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/18.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/19.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/20.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/21.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/22.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/23.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/24.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/25.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/26.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/27.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/28.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/29.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/30.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/31.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/32.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/33.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/34.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/35.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/36.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/37.jpg";
    } 
    elseif ($manga_id == 2 && $chapter_id == 4) {
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/2.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/3.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/4.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/5.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/6.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/7.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/8.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/9.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/10.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/11.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/12.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/13.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/14.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/15.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/16.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/17.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/18.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/19.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/20.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/21.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/22.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/23.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/24.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/25.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/26.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/27.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/28.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/29.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/30.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/31.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/32.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/33.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/34.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/35.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/36.jpg";
    } 
    elseif ($manga_id == 2 && $chapter_id == 5) {
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/2.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/3.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/4.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/5.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/6.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/7.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/8.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/9.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/10.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/11.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/12.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/13.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/14.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/15.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/16.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/17.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/18.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/19.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/20.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/21.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/22.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/23.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/24.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/25.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/26.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/27.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/28.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/29.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/30.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/31.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/32.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/33.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/34.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/35.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/36.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/37.jpg";
    }
    elseif ($manga_id == 3 && $chapter_id == 1) {
        $pages[] = "https://img.manhuaus.com/image/manga_65e5f33203471/9996d69dbde728c28d58bb014d5e3914/02.webp";
        $pages[] = "https://img.manhuaus.com/image/manga_65e5f33203471/9996d69dbde728c28d58bb014d5e3914/03.webp";
        $pages[] = "https://img.manhuaus.com/image/manga_65e5f33203471/9996d69dbde728c28d58bb014d5e3914/04.webp";
        $pages[] = "https://img.manhuaus.com/image/manga_65e5f33203471/9996d69dbde728c28d58bb014d5e3914/05.webp";
        $pages[] = "https://img.manhuaus.com/image/manga_65e5f33203471/9996d69dbde728c28d58bb014d5e3914/06.webp";
        $pages[] = "https://img.manhuaus.com/image/manga_65e5f33203471/9996d69dbde728c28d58bb014d5e3914/07.webp";
        $pages[] = "https://img.manhuaus.com/image/manga_65e5f33203471/9996d69dbde728c28d58bb014d5e3914/08.webp";
        $pages[] = "https://img.manhuaus.com/image/manga_65e5f33203471/9996d69dbde728c28d58bb014d5e3914/09.webp";
        $pages[] = "https://img.manhuaus.com/image/manga_65e5f33203471/9996d69dbde728c28d58bb014d5e3914/10.webp";
        $pages[] = "https://img.manhuaus.com/image/manga_65e5f33203471/9996d69dbde728c28d58bb014d5e3914/11.webp";
    }elseif ($manga_id == 3 && $chapter_id == 2) {
        $pages[] = "https://img.manhuaus.com/image/manga_65e5f33203471/4dc8d6c693a8b698a23b72c954ed742f/05.webp";
        $pages[] = "https://img.manhuaus.com/image/manga_65e5f33203471/4dc8d6c693a8b698a23b72c954ed742f/06.webp";
        $pages[] = "https://img.manhuaus.com/image/manga_65e5f33203471/4dc8d6c693a8b698a23b72c954ed742f/07.webp";
        $pages[] = "https://img.manhuaus.com/image/manga_65e5f33203471/4dc8d6c693a8b698a23b72c954ed742f/08.webp";
        $pages[] = "https://img.manhuaus.com/image/manga_65e5f33203471/4dc8d6c693a8b698a23b72c954ed742f/09.webp";
        $pages[] = "https://img.manhuaus.com/image/manga_65e5f33203471/4dc8d6c693a8b698a23b72c954ed742f/10.webp";
        $pages[] = "https://img.manhuaus.com/image/manga_65e5f33203471/4dc8d6c693a8b698a23b72c954ed742f/11.webp";
        $pages[] = "https://img.manhuaus.com/image/manga_65e5f33203471/4dc8d6c693a8b698a23b72c954ed742f/12.webp";
        $pages[] = "https://img.manhuaus.com/image/manga_65e5f33203471/4dc8d6c693a8b698a23b72c954ed742f/13.webp";
        $pages[] = "https://img.manhuaus.com/image/manga_65e5f33203471/4dc8d6c693a8b698a23b72c954ed742f/14.webp";
        $pages[] = "https://img.manhuaus.com/image/manga_65e5f33203471/4dc8d6c693a8b698a23b72c954ed742f/15.webp";
        $pages[] = "https://img.manhuaus.com/image/manga_65e5f33203471/4dc8d6c693a8b698a23b72c954ed742f/16.webp";
        $pages[] = "https://img.manhuaus.com/image/manga_65e5f33203471/4dc8d6c693a8b698a23b72c954ed742f/17.webp";
        $pages[] = "https://img.manhuaus.com/image/manga_65e5f33203471/4dc8d6c693a8b698a23b72c954ed742f/18.webp";
    }
    elseif ($manga_id == 3 && $chapter_id == 3) {
        $pages[] = "https://img.manhuaus.com/image/manga_65e5f33203471/98891bb71c05f765e6969ac5ed648d09/02.webp";
        $pages[] = "https://img.manhuaus.com/image/manga_65e5f33203471/98891bb71c05f765e6969ac5ed648d09/03.webp";
        $pages[] = "https://img.manhuaus.com/image/manga_65e5f33203471/98891bb71c05f765e6969ac5ed648d09/04.webp";
        $pages[] = "https://img.manhuaus.com/image/manga_65e5f33203471/98891bb71c05f765e6969ac5ed648d09/05.webp";
        $pages[] = "https://img.manhuaus.com/image/manga_65e5f33203471/98891bb71c05f765e6969ac5ed648d09/06.webp";
        $pages[] = "https://img.manhuaus.com/image/manga_65e5f33203471/98891bb71c05f765e6969ac5ed648d09/07.webp";
        $pages[] = "https://img.manhuaus.com/image/manga_65e5f33203471/98891bb71c05f765e6969ac5ed648d09/08.webp";
        $pages[] = "https://img.manhuaus.com/image/manga_65e5f33203471/98891bb71c05f765e6969ac5ed648d09/09.webp";
        $pages[] = "https://img.manhuaus.com/image/manga_65e5f33203471/98891bb71c05f765e6969ac5ed648d09/10.webp";
        $pages[] = "https://img.manhuaus.com/image/manga_65e5f33203471/98891bb71c05f765e6969ac5ed648d09/11.webp";
    } 
    elseif ($manga_id == 4 && $chapter_id == 1) {
        $pages[] = "https://mangacherri.com/mangas/52/2032/0-IjfWnTtDPoEIq-m.jpg";
        $pages[] = "https://mangacherri.com/mangas/52/2032/1-HvJ4ldMmCwxfa-m.jpg";
    } 
    elseif ($manga_id == 4 && $chapter_id == 2) {
        $pages[] = "https://mangacherri.com/mangas/52/2033/0-d-zEHByfBAN-h-m.jpg";
        $pages[] = "https://mangacherri.com/mangas/52/2033/1-0oA86-l_Uoutd-m.jpg";
    } 
    elseif ($manga_id == 4 && $chapter_id == 3) {
        $pages[] = "https://mangacherri.com/mangas/52/2034/0-DrNpqi3bD2Noq-m.jpg";
        $pages[] = "https://mangacherri.com/mangas/52/2034/1-N7BacfYPnZVaH-m.jpg";
    }
    elseif ($manga_id == 4 && $chapter_id == 4) {
        $pages[] = "https://mangacherri.com/mangas/52/2035/0-O0MZuOpTMm8mQ-m.jpg";
        $pages[] = "https://mangacherri.com/mangas/52/2035/1-Q3Q6-YcpGsHxw-m.jpg";
    }
    elseif ($manga_id == 4 && $chapter_id == 5) {
        $pages[] = "https://mangacherri.com/mangas/52/2036/0-zgYsL8eojgukP-m.jpg";
        $pages[] = "https://mangacherri.com/mangas/52/2036/1-i4liNdFReM8sr-m.jpg";
        $pages[] = "https://mangacherri.com/mangas/52/2036/2-Lnjur8Ly6iqWN-m.jpg";
        $pages[] = "https://mangacherri.com/mangas/52/2036/3-J6Q-1sWws_-eh-m.jpg";
    }
    elseif ($manga_id == 5 && $chapter_id == 1) {
        $pages[] = "https://en11.movietop.cc/comics/pic10/40/78120/11199732/ed509a7d110c733ccafb1ba59fa17066.webp?acc=IDt6CQM_2X71Gt5Y5NS_Uw&exp=1758361650";
        $pages[] = "https://en12.movietop.cc/comics/pic10/40/78120/11199732/5452a60329b853edc5b4d4c8d331d025.webp?acc=Q3wtp0mp8T7vqNpeayHGNA&exp=1758361650";
        $pages[] = "https://en10.movietop.cc/comics/pic10/40/78120/11199732/638c1a4f003b46aad4aa5cf3f424d215.webp?acc=QliIy6ZUadldPTO-n13JsA&exp=1758361650";
        $pages[] = "https://en8.movietop.cc/comics/pic10/40/78120/11199732/2fb73614bc29317710e1c9936f9acc3b.webp?acc=8IicP4JLIIisdOw_XqWDSQ&exp=1758361650";
        $pages[] = "https://en12.movietop.cc/comics/pic10/40/78120/11199732/23f64507ae35b67628d568278d85e5d5.webp?acc=yZHNCbF5x18qSfud3TvOGA&exp=1758361650";
        $pages[] = "https://en5.movietop.cc/comics/pic10/40/78120/11199732/eb9996ba82b8594e08eaa35e3e753922.webp?acc=9R8LVe0UJDMWg2FFPISW4Q&exp=1758361650";
        $pages[] = "https://en4.movietop.cc/comics/pic10/40/78120/11199732/f18113a7d563cabe4df32ef759f450d6.webp?acc=EWj4yyb2jwlEZAmI1aEINA&exp=1758361650";
        $pages[] = "https://en2.movietop.cc/comics/pic10/40/78120/11199732/a5028f943728237281fb37742b497de6.webp?acc=xfYjag2UdEUbiggMNFhVIA&exp=1758361650";
    }
    elseif ($manga_id == 5 && $chapter_id == 2) {
        $pages[] = "https://en14.movietop.cc/comics/pic10/40/78120/11199732/c4ff6a70d3b8ce3e686e2b2c329d9301.webp?acc=MNq8pkY-QZlhhVHnmWiB1A&exp=1758361650";
        $pages[] = "https://en11.movietop.cc/comics/pic10/40/78120/11199732/23c947e1c525293c569026ee89960600.webp?acc=0A_Rw9YHI3ybw5GQC2p4VA&exp=1758361650";
        $pages[] = "https://en4.movietop.cc/comics/pic10/40/78120/11199732/459a952dc77e8d9757246964dee7fd18.webp?acc=7CnJMqAGM3JTGNxlPvnMSQ&exp=1758361650";
        $pages[] = "https://en9.movietop.cc/comics/pic10/40/78120/11199732/dd2cc2088b77d344f7b5ec13e6ff4922.webp?acc=O_YIFYowEuJQt0z8WV2zwA&exp=1758361650";
        $pages[] = "https://en2.movietop.cc/comics/pic10/40/78120/11199732/ec169a34f974ccb7e834fbfc88d61ff3.webp?acc=TNZ8rRAaB03QQwe2rVfZvg&exp=1758361650";
        $pages[] = "https://en2.movietop.cc/comics/pic10/40/78120/11199732/f1f901606f26ef6fa343937bd99c23b7.webp?acc=2kwXEKxL8sK2Eiz-9rrAnA&exp=1758361650";
        $pages[] = "https://en14.movietop.cc/comics/pic10/40/78120/11199732/98465964ca8cd261e30c525aae7ba618.webp?acc=iTapbZSr5iKX8e3ztoYnzg&exp=1758361650";
        $pages[] = "https://en11.movietop.cc/comics/pic10/40/78120/11199732/efd936e16d4c5fc3fe8f493fdd9d7205.webp?acc=9o3pYUZaYRNGu-UchgDiPg&exp=1758361650";
        $pages[] = "https://en13.movietop.cc/comics/pic10/40/78120/11199732/1d24d38e350c36798eb41934667d4f0d.webp?acc=ya0EdVG_h7DKJRefYWQaVA&exp=1758361650";
        $pages[] = "https://en3.movietop.cc/comics/pic10/40/78120/11199732/251ea36cd4aeed340c0ac860d09f05b8.webp?acc=HnAgl7bDWqJd2bJOagmrrA&exp=1758361650";
    }
    elseif ($manga_id == 5 && $chapter_id == 3) {
        $pages[] = "https://en11.movietop.cc/comics/pic10/40/78120/11199732/571f3ecb0738e2eb0f162196fea1ef91.webp?acc=BaWATmrRj5Cw8IZ6-LjjSQ&exp=1758361650";
        $pages[] = "https://en6.movietop.cc/comics/pic10/40/78120/11199732/19840002af460eae164922c36973f455.webp?acc=fTdrPE9voTyBX1kEf9QTUQ&exp=1758361650";
        $pages[] = "https://en7.movietop.cc/comics/pic10/40/78120/11199732/0e89ccedef7fdb65b6d529e2ee33fc56.webp?acc=DUnEx0sEMvs4iplqCnViAg&exp=1758361650";
        $pages[] = "https://en7.movietop.cc/comics/pic10/40/78120/11199732/03a8992c98d91eb8c946ae277c9514df.webp?acc=46vpUAyTIearQ8I5byAazQ&exp=1758361650";
        $pages[] = "https://en11.movietop.cc/comics/pic10/40/78120/11199732/f11c07777f32141bf411e5f52d10e39c.webp?acc=ttzTmSPXREre24bWpwp5MA&exp=1758361650";
        $pages[] = "https://en7.movietop.cc/comics/pic10/40/78120/11199732/752eaf975d0a06d11f32a62f37e2101a.webp?acc=Yupzk8Qmi43f39jCj7cBGQ&exp=1758361650";
        $pages[] = "https://en5.movietop.cc/comics/pic10/40/78120/11199732/ceb134e5796a3106af37c7e2d29d9df3.webp?acc=5xZ8knAGD_diqnCbDiXgyw&exp=1758361650";
        $pages[] = "https://en10.movietop.cc/comics/pic10/40/78120/11199732/cbb686245ece57c9827c4bc0d0654a8e.webp?acc=-9C5pvaHlI7J1S7B8WqNcQ&exp=1758361650";
        $pages[] = "https://en2.movietop.cc/comics/pic10/40/78120/11199732/555ed9de909ff98b3a9de74ed0be9ecf.webp?acc=Y2-5NWBRVJ3dtEOSdAXwZw&exp=1758361650";
        $pages[] = "https://en7.movietop.cc/comics/pic10/40/78120/11199732/01a28000ad28de1acf07bb4d830a5ae5.webp?acc=v69Mckdq6IA_Ac8uvH3cbw&exp=1758361650";
        $pages[] = "https://en7.movietop.cc/comics/pic10/40/78120/11199732/01a28000ad28de1acf07bb4d830a5ae5.webp?acc=v69Mckdq6IA_Ac8uvH3cbw&exp=1758361650";
    }
    elseif ($manga_id == 6 && $chapter_id == 1) {
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBPi1Z_PCRGLPdips5rW62NG_LXXquz5cWflWaQk3ufiR7rAqM5lAVTsKjYtt6AKgw1qzsAjRnEhT8pyTywPKi8HC4PMeb-VFJ1WKhWinPSquwE=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBOxKSx5YXJ-_jYbVn-nZnCyY5mIsZCx8eUyH_HNmMiTyzip3311LY6UrtdTr2MHFM1Kt-6eaXeQukFbXxUXmJQiMv8XP2HbYdyaST9iAvHNI6Y=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBNTmwyzQMLlVmpWxhKTYFpntGLJ9H0_b_mDqsKk0tWxRx455QdGMnr06el-Q-DxPxt0zP_qku7yDeur9HpWgEXNOem3OLzc_8OSCNKhQSk38jk=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBMAoZ2oLb7uuS9acjHT9CTCxXWRvn_YVOzxw7KemkujkprjruZK09XOiYv1fOYB7PeN2_c6FmruVkecVcH7PHGtIcV4bI5AlF0cJniRMQyNWLQ=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBMhV46Nj2dZr1xZ2tZ48tfRQ9Mg6ZPfAtlFVcOegV6O7clpi05Zfo229ZbIrnDOEzbhIbMKBtNnODmow_Lwf5RTt6zDl5-rDIaNFugdQF_gy08=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBO5M6IczqTeoaQXDhkcjJGpaP4J73kwkm6qVvWE190ldttIkdkt2habQn_7MOsqU7Qq6z0nV3HJXFfAVKfXXyEqlzjLauO23T0hVJZgI7Ty5PE=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBO_9jUL6_cXIkrgdUcjlI5oDcUlE_9JxwKKcZ-jTkUIGKNTamXMPPzdaB353LtWNHCEVt6tjM_GMWCRRJStCH820pn9N0aR-DY_x3RK4i99Fl8=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBM4-Ktq33I4Szo6BZSWqM3i7ae7ftl6JYtOB8TKiaSGWDrzDtA-GAAv-q7Y0MTue0nxHJtADOMp7RuK_WkhKdIFBohO2VsLKskRnOegcsAmIcE=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBPdgMvrqWrmAY-e1-CwNLo6l0FeO_y40qk5bNhD9pqz0SWkDr9qkTITOfXK9CElMwWebxcuZzFrNYZyBis0IeFYLtqx-Z5RMk0YueR5CWl1H0s=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBNdzgLyhIqB5EH7P3AbbXBc5V9SuMMat_dHs7R6UWdt2EpsrrZCMbJwhMZJ05mKlbOtgPuqHOtzZfZhwrGHpoO0I4hC3Ikg7H86c9jqq-WcWfA=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBPaUhT0KoP4biDgswevqU0SvI1AyeOkw5SywKLwoTBtrmK8V1k3urPcm0ELqosz66kMeFJBUx1mN9PiGPZ90fDpgG03X5E0-lPtSv9WLsy1Nz4=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBP3te99ionNJlJ86SHLWcjnfVKXAQSR8Qs5ciPGt5o_y9QI7QlhkIqRoMb2YQdi6AoVJKgxWEKKORAmgtzUCEjcZIDTiqsrnxVhN-FMx63w8ok=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBNNoKKHqX0Zbh87h55JV2DLi5PaLGlRnSwXitzYyPo0ow9kYMRym3OWzr8DFWeETuTsrEOtrgFIcOdc1vJXNDZNovVT4wHJwd_TGgSOEOpt_2o=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBO-aLJ7L57TvlhwH1x0ZF8pBtph8eXhBOh6KUw7RtPLweVNAhNIjSAyBoAIKXx2UonseSjGMdVtlSPgGURCNDnpbIvO363sMjdl29V3ejbf070=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBMuqR4nYw5uqcHebbRVaXymrcBvdBzZlvBdN0fZbPQcXYIQirFxEJO3kbBrCiQEPNB1D2hhJJkBFBrFrJ_lKtkh_zQSjojRz09vc8Wag0_BhDU=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBPATVhDg4R-NFx17l3f0q0AgapdBgJAigZ060lZhwRESdf-osXgWvadOnl8Y26W9GGmDOjO7tYzukLSbrREWYXQDS3-9gK09DhsRyM1XzPrLGQ=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBMzFyZOG1CovVKN3Wpw2nWBG_6hO5PINblS229-gjhKUFS_GrQuz6taYqW4ygPSrRif3ZFXZLcjF-bBx8QXyt-4udCXr9hMXbDDTdh2Tj53IBY=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBNtM0Qv4gZvP43DseKuQTGbfiRYz1b9z5CWfYfOBE2rhyAyd4GTWyRLirWgZQPgUYiYCROd-oT8r0Ez-bdHuLq45Lkyrxc_WJdqGvQ_PyGClmE=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBN72IaWK2NO1qwutTRP13vqPJX2Ma9MaZANil99bLKw6Ods7p8-xbb00rYKkSqOh6zhzrrCsjzNDjXzytRPAq_ERJYp3jV-TlSl3osWU9r_wOQ=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBOvf-2SQgVghQY-Fw4zHlfghQeTIsIDskvcPMNacA5s2zrZnA7y251-2t8Is8rvdoDRr9Hk20UwhKEmqY_jco2spZ72qjxLOaCQ9kNIRdU7TQk=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBN7kVIHjQRwJJpJDoyk8l0cnfM8m5co1qE5QsUG8qkCGmKL8N-FvFt_CH5u2VHj6P3HVoXFZh5VW52MtjIY_jf9x5DgZphtbJd_vZKqOgv1Rec=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBMEic7LTKgoz2QX5R54yaGWOutw2TlO1MG9eWUdpTI6-jC7znP-TNkN1Khpvr5L3Aun-jayGYh-FmNlLbsiuv2OjtvnTjLMWDe7kyxauVuSgdE=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBNCWGd3EEn-aQSHqQMxcS3jSUkQn80wDKXPd0bb5tewn71PEGMzehbQCDdlvX6pjDV1j1l_7yXAz1ESNkJRGtAaLGaVNmhuq076OEamJluRov4=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBMNe64mw6NeqftFq_L5dzMcboUbNUKtq7t9jaDYpKjSy-J-2Nr0BkuInLk2muqonKMGYIGGDcOtbWu6WRxQs3iKA9KBIDMP7Vc818QP07Pt_d0=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBOZ7hvqvsgC8fg3oY3Ey3lV-HdwzLUhD2CAD6YxLqCiw2c7aixOKEIXet3hnIbJGMzoSsVTli0BR0DJCh9Ck94xZBPGF6BQRPTGQTjdAsW80So=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBNhwAlZtnIpO5cItZUll2kv5VDIQg86OtCRS1drPdMX9jFAtmmkclNBfmB2m9oXLZ4fzJmeyM03vNJPxITAbxdjlZ51TgzuUINN8TuNYs68Uik=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBOI8rUCbQIjz7WWQWgetp139pOlSLn_xjR6OS-Q5S4wD9V36AaeTmuFORjIJRX091oofQC9xpuufLklBXkOFTPl5MiBPiiVwhg4GJ1AP3pNQmI=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBMivYOvFLFCziR1FG_kt4n0rglyKu5UM_oFq1OTkXYo97QvE-nT5PQame1LmUVxx1Go5phnaHO8BOFN1Vsb0L0ynbw02J4GDcx9xWmCH80b3Sk=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBMexXJatYZ3By8SR5sT0KI5hMfLQphNyTb9suzic7x3meXy8cInaGA5xDNojMnoe1J6vsN1gCThOBHatrhlDBMVy_5pUNpZferbidYxWpNxxt0=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBP5GokLke5a2E34Vc2_rGLV4-uQAmVP4XbPP8oZG0-_Kn7sRG6sgdcXmSr-8IWL6Zzo5EEKMmy2OqpsbAee6tEoSSSLqJXKcyTpAVEI2dP-edY=w700";
    }
    elseif ($manga_id == 6 && $chapter_id == 2) {
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBMvS0xrhSDM-UufQo9dy0N9-3pSiRGL0IBP3CrjDxr_qYqjr8EAjTSUnu3SoX2-c7wv-Go1y3vQ6jpSfPilGbh1quWUZwkHM1AqFuT7Yy3rqc4=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBM8Y30Qf9S2XEWOu5C0Syr6H-XQtj0LdWW2t5xKBKpQlBF4vFG2iVghitUufkrlbYsAuxE_UbAbOa9D-TTwJ6rZuHQLzfQ6-508NNPbbxcQTRM=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBNTaa-Y52LbD0MEuoSWeXzuo1BkxwqNwBl301AyDxPgN0Qqux8lBvpDrNaeEFaGqr8YFAv0ZGtkJiZJBkkOrDBEM_yVr1CXvJOz0EYTKoQMvBg=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBPkjC_wCx1SyTNHZ020-4naVUEI3-THJFnP-4bdxpWIZO31Lb5Naunxe4zqNER5k4mnukL8oAdUT0o5I7HWiZMFqYLbpljpHJcPpRoA2YUqkkI=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBPkVhoQ90Ll3Bp-u9vouL1oGSHCfOR6a-eE8Udtnj_j9lkLiSBCDL8e-YythKPAtDWB-d9m0uczMrB83u5pZtuOGTMVQh_UBfHWAQMt78ccMoM=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBMbv_PIVsIeu24NmevhT6mPSMriFVk5rlM4S4CwVvJxXNCVDdFf_KjvBohwE0psWEINNLCrATH3PAlUvBvIXUk7ER1Sq5gpC4goYCS0UHhK3WI=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBNNpHOYEx3IKpX2APli9fyurBowNTkFJeO_lrL02W6YK9o6kea3DYEM1_UuKxMpjSXw3mA2tTDfPmgWSai0thwaPnrUGaoEVQFKZQKd-TXwFx4=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBM7a1mU2mtExDztjrQCpcUAaauRGSshmuogGunY8M2QXy8iPd7dfzLJ5qah1oqFpiObUzykije3XVz9B2X61u-g79RQL4RmWfAkWEP0qdz3TEc=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBMsZN9mX8brNquH9TGvYPudtVPyMt-OQP67kIBrcTt_sJjNEbFzUnxdI0EvxDCmfcyo4RabRbz59qLVYK3y9loJtZJNr7THhIS0jD-J4KYVL1s=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBOta9LfgPmBXXD6VL54wLnergD6Tova0nDXi-eDEew8lF1BOElCxVDk7bsnjib_EbL_JWPjt9hK0PKS13ec7eKfiu70IpuUZsgFOerbUA-E_Mo=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBPUAfa6KMxgBK7_GdsmTyuYqbg7faSFucrupaB9zib-QJNevIKfQLhsf_hAWLBZeMqRWRAIyDozKqR2osDwWyXMNxUKkuCXvfAGTS39uRtjoI4=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBPtB6qkDa05qFKYQQIjLQyCrwT8vThyuoN1yEgdp64qTtKZwRiDqRtrzSfXNjYJWcF9JogOY3O5HbyyrRVOr6ndDvKn4T57QTmlUsAfp-Td0Is=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBMft1w8Fmc4G2XaCMpnDLFVmdR0wajZS_xLi3jUKSxrPMt1my2TFLimd9VLuLZAMADZKW3jwkRA_vgR3u6h_k3lCpiFYCQmeCE7tGrZuWNRTno=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBPOZKG6Fkva8UGzqFZ__Ivb06kovdO_TUcxOqOcxNXgusDy58o0n8m-noNQ5dugYze2ANQT6vADykMWwSRny09qBCxU5c-KXBy-2fImMOxeNp8=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBPbA-3yzGYw6ehU7eNrVMOaOOu_4UNlA_oS9F_m2QmckiV40peXxGkBnlCpHW1GYlCA1QJ5t3KO4Ju3_g4UVAMGHqTHi0My6qlIKBLoF6REaEE=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBOGhYy-Yewdjdl5t4FX8oWGyoSnv63aQBcRvVBnO25okuesbS1ry-URaJpJ59MDwzdze5xXfifPUKRI2lqLKvz6_LMNanBAGdrCoSVjzB3bCM4=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBPEQ4acBBT1e1FwkjWGOJpyv3lOO6vEVtjZDQqyELjLnUrfJFV3ukN9KQ64W5C02GKNk_YnJ5Wdz5RgAYeUzCcaepNtKthn7N-63HgpmjhF8dw=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBOPbjcOZwuWeaGQxu3KpNMpXypfJwQSfvvhyRSn1Xktf-Qs4AsexBElnl8ECLpCXTF_XVETiwkkfg-JEXM02l-pawcaZIHhtMQf2imDw_TrnC4=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBP6VwdtKcGrJ-TWqGj-CC4tdo07ykP80y_no4TSzzH0RGyGjO5Ig_4wPTUl1wrXsLlK-Z0gJ9EFU6k-meHEb-3E95DvC0acR8RjAS2SxvxONUQ=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBPo5b8cFmEcZyeSDSx5nopsB1TaFGBzlFmAW5FPZnKAQ334uF8m6fBBvr9RtbzHkIPB70r_NRKbyw17p8bynoNPE7hf_A8dUYl6gcqtZHEKuko=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBO6YEBqlKzyDqubTnqE4YVmhkNBUxx2soW_k48xMblbmBEkCfE-GPuinTHy9wquuoyjLmUShFUNiZU8fqY9SSAlOuXz3jIk38BVzC6c22PdDY4=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBNP06XFjOBCf6LkrWNRLYkbX-odt-vi4wA90TjLnDKtmoD3aqsaFHE4sIV6CG-ET2-01wVFd1FP0dcTwY0MXJAmJAwOa7NgcB3peEGBH36fzfM=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBPQNlt4_QoYQzBo9VbWENlIvge1l51dX1r3xjsIj5aojzs6-LZf7Sy1V7OhAKbosxLK-aFOj2ROmkkWHX7n_M_XZ2hZGqd0yzXklVjvOby1b0w=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBPeLUyU6rqYCj3RzmXVV4GidUH4ygi7BMauPCdE4zMbggHqjy732ulf4t7PLYK5DsCa6fh6WZoMsOFJZ8trLBF5rdVnRsRTSKDM--jPpT8IVUg=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBOVJtgi3EXk7oBvkDKm_88hzAsTA4lyS4QyHrZ6ynEuS44c5gO-3fStfURXjpQ5d0Ewk5skrtOoJ2ctbs63KBuFF35Id7ZZnXBsvrBGki-6K_s=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBMIBRjSEPS_1Qdd3VhEruV-dQB5FPElOgCDsSyWZALYLP2e6U0KBjyDsEh1kzhRYpUruUMaP8BppxvrhLFhQ4UVYtSFnBqNclcVTyw8m1jI6rI=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBMlqZQykV4sCk3Gs1qgSDk2LBwUW5cj_Epy58Do4ppQZINHXE8SHKRAZCpHmR_XhdLiJ1I7FMKHtroyovkU3VnKcsvBNGp3b_vUJNUUYwyCFDI=w700";
    }
    elseif ($manga_id == 6 && $chapter_id == 3) {
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBOd16ItA5KTcS9ir_oDSLOmT2QyTys3g_lGLbby6l5woIqYvtmP83vHvCdTYPszTGXLqLuBFcBL3j8c2S3I_n2wl01KshuDe6Ns7EvwCeRx1lU=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBMva6fr1kgTNIRY_AU4gnt9oEakAG6OIN4b78cI-4Cd9sRosIAEnnxCKCAmMSp9a69sKAKgD6pMhpf905CnwGWyLaLgwkmT7nWroWBxE8J2DiA=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBObcP32ly9vbsKskH9E4VDyspn_16N370ZSibsqB4jRS5qSFzsUg6Mw7AFlHKHthoVqnUgQGF4fFK0wT0Z7slnlPDbhH2y45F9dTzWXRiyGjig=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBMU2BpBnnbgMVtfNyNWHYcvp-cOmxrsvASDIjElTdyPjCLpm-nqVy2OYWYhWEEHOMhK2oTzXi17uHhG91lqOtzQvQiDSM81Af1PpaELxqxPWn4=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBPDWH_x8MSnME_EpvKZl_LmJkvZ5uUGwGxSc-ElXyQcBxNRLuxOUWRA6HXhWOAvp5DT4u3HSVV7CFC-2lOlybYjdBqrVI83eC54mnkyhoBPtWU=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBMWbrSxyxGrQV2i4Zyl6k3ys32DEGKXefV52f3YDmtOmTFeI6dmgUjUN2VopBhcpVFOLiOQt68tV0gmuND3FBKl7NCYgzGuFY0uKL4pxVXG_sU=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBOE2y11Ul8qDpFpCD2jsRigfQfpf9t_vS44c9-glHkycKMP0QiITa7b7yveqEWUAyz_G26OvH_dNS8CrzD2CCaKf9puiBsovKGqgm62OPGpTeE=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBNw0s1XuIsa6qHHt_KdLeYrIleZyz0lWxay7wviwCdu9WnjuZAZSKrcFbCgGqRVxJAux6Bh2r4esltmM0ihtrnwuJ6I9IHIp4l0fjWQ9wLCq1A=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBOCpX_SlPI9dxitKOZkifjrCHYG10bvvjNkcgMQco-QjC5-qXkbs-PLneArhfi1tHtup3hHVAk7P2A6u0kdYPp6UqbSkd7BpF_jPapkcXOc3Wc=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBOw7t1hm8dZmovgTwglssHrezkSTgR41YC3rreLBDMgAOhHdM0PjHZD-hEn0t5hYafL2JxV_unSVY0Re1dWtJez-mY4qKaDFdm9_X0CCs9MhLI=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBNT4fdDLrrx9VmFqFEViHlbT6lqRTmBc6vqXDqMaITuOHMyGPjFfKJenvQfxNdBKBAQcOWhzFuxXJAPcgy8J2Cu7ELZvJ8vr35dWGMvBcpZzeU=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBM3nTwQyv7juSEi8OVA1qAsnBeDSFXHZCek65RvmTShL3a3aCYkZdQ-ZMqev83-FZykX53uGDuh2PX8WDKJM5gXSgrEd91mjTPzCGBbHHlj8l4=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBPKe5AkXGlxjnKgwq5X-muRQifbkdljhxeTsj0GBrJ8TcYnLq5ixJuGaF9z_IftGbENoLoua9qJ5LDw6lXA0fvm5Jp11PH3TWUg6x2v6swhjYo=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBPQgsZ39AOMyERPd8hB8vzAl3gbYhmN9I0YffgK9GrZmLx_0V10-QAXon23gcve1xdPpVIvfSTroZSxvaQTXKICCXKCOpOWUoBho6DjUtBIM9I=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBNVg5C3AVzfYtk-V3PpFDd9Gg7QjHbpM3i5JYqIvsQL-mxzJGX8sn1KPNFYhj51gDDMDlMrY6QnUmjB8NT_ax173GAKrkXC_TnlkZxRAtk1-D8=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBN-WsVtqpAw9C0fyklJ9cTeezKW-zhRfiXVIeK5bEgGT-H6dzNNOv0-TM-ox8Bbpk-3sQbnIa_aFvD6Igoc-qtmM2HDLDZF5nww1llXLtTs9xQ=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBMAEekOr5AX5nHvkNCHIrZJf6NWxgKHYh0jFCfcFXYmcGt4j_qRRCayTdLk0_eUOx0hiiHdk2x_yyraa15KXXRwxLaU1BGEhokT6rkl_om0o1g=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBNmYnaP36RqG3yVJdv_ZDJGPDcOJDsOonFxrsXhL1E8Oa4yLt5vLtODpJM_6axoFd16ksEj61AWar0bcWFbfrvqLqb95jcJjb65tELeobmqi_Y=w700";
        $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBPGU0rMabFaXalLEtnHQWMt5g2poI_49L4ToRJIcl9d9X5Pe2miEW797k00oXZ1d57rkayk06Y3riQAp0XWNr3-_1IOoNmdOtz2Py8VK7XDgeQ=w700";
    }

    return $pages;
}

$pages = getMangaPages($manga_id, $chapter);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?= $manga['title'] ?> - Chapter <?= $chapter ?></title>
<style>
body { 
    background: #111; 
    color: white; 
    font-family: Arial, sans-serif; 
    text-align: center; 
    margin: 0; 
    padding: 0; 
}
a.back { 
    display: inline-block; 
    margin: 20px; 
    padding: 10px 15px;
    color: white; 
    background-color: #E50914;
    border-radius: 6px; 
    text-decoration: none; 
}
a.back:hover { 
    background: darkred; 
}
.reader-container { 
    max-width: 600px; 
    margin: auto; 
    display: flex; 
    flex-direction: column; 
    align-items: center; 
    gap: 20px; 
}
.reader-container img { 
    max-width: 100%; 
    height: auto; 
    border-radius: 8px; 
}
.controls { 
    display: flex; 
    justify-content: space-between; 
    width: 100%; 
    margin: 10px 0; 
}
button, select { 
    padding: 10px 20px; 
    font-size: 1.4rem; 
    border-radius: 5px; 
    border: none; 
    cursor: pointer; 
    background: #E50914; 
    color: white; 
}
button:hover, select:hover { 
    background: darkred; 
}
</style>
</head>
<body>

<a href="index.php" class="back">⬅ Back to Menu</a>
<h1><?= $manga['title'] ?> - Chapter <?= $chapter ?></h1>

<div class="reader-container">
    <?php foreach ($pages as $page): ?>
        <img src="<?= $page ?>" alt="Manga page">
    <?php endforeach; ?>
</div>

<div class="controls">
    <?php if ($chapter > 1): ?>
        <a href="panel.php?manga=<?= $manga_id ?>&chapter=<?= $chapter-1 ?>"><button>Prev Chapter</button></a>
    <?php else: ?>
        <button disabled>Prev Chapter</button>
    <?php endif; ?>

    <select onchange="location = this.value;">
        <?php for($i=1; $i <= $manga['chapters']; $i++): ?>
            <option value="panel.php?manga=<?= $manga_id ?>&chapter=<?= $i ?>" <?= $i==$chapter?'selected':'' ?>>Chapter <?= $i ?></option>
        <?php endfor; ?>
    </select>

    <?php if ($chapter < $manga['chapters']): ?>
        <a href="panel.php?manga=<?= $manga_id ?>&chapter=<?= $chapter+1 ?>"><button>Next Chapter</button></a>
    <?php else: ?>
        <button disabled>Next Chapter</button>
    <?php endif; ?>
</div>

</body>
</html>
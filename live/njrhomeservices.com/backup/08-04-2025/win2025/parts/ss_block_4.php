<?php
$value = $args['values'];
$title = acf_subfield($value, 'ss_title');
$content = acf_subfield($value, 'ss_content');
if (!empty($title) || !empty($content)) {
?>
  <div class="container mt-8 md:mt-12 xl:mt-20 pb-10">
    <header class="max-w-[1200px] mx-auto text-center [&_h2]:text-[#0066a4] 2xl:[&_h2]:text-[2.75rem] mb-8 md:mb-12 max-lg:[&_br]:hidden">
      <?php if (!empty($title)) { ?>
        <?php echo !empty($title) ? '<h2>' . $title . '</h2>' : ''; ?>
      <?php } ?>
    </header>
    <div class="relative overflow-x-auto mb-4 lg:mb-8 xl:mb-12">
      <table class="[&_tbody]:border min-w-[500px] [&_tbody]:border-t-0 [&_tbody]:border-black/[0.15] w-full text-black [&_th]:font-medium text-center [&_th]:leading-tight [&_strong]:font-semibold max-md:[&_th:nth-child(1)]:p-[5px] [&_th]:border-black/[0.15] [&_th]:border-solid [&_th:first-child]:border-l [&_th]:border-t">
        <thead class="text-white capitalize bg-white">
          <tr>
            <th scope="col" class="px-3 md:px-4 py-3 text-[#0066a4] w-1/3 font-bold lg:text-2xl">
              Plan Type </th>
            <th scope="col" class="px-3 md:px-4 py-3 text-[#0066a4] w-1/3 font-bold lg:text-2xl">
              Equipment Covered </th>
            <th scope="col" class="px-3 md:px-4 py-3 bg-ss-blue-400">Total Comfort Plan<sup>†</sup> <strong class="block">With Promo Code WIN<sup>*</sup></strong></th>
          </tr>
        </thead>
        <tbody class="max-md:text-base lg:text-2xl">
          <tr class="bg-black/[0.04]">
            <td class="px-4 py-4">Heating</td>
            <td class="px-4 py-4">Natural Gas Heating System / Standard Water Heater<sup>†</sup></td>
            <td class="px-4 py-4 xl:text-2xl text-primary">
              <span class="line-through">$22.08</span>
              <strong class="">$17.91</strong>
            </td>
          </tr>
          <tr class="bg-white">
            <td class="px-4 py-4">Cooling</td>
            <td class="px-4 py-4">Central Air Conditioner</td>
            <td class="px-4 py-4 xl:text-2xl text-primary">
              <span class="line-through">$18.90</span>
              <strong>$14.73</strong>
            </td>
          </tr>
          <tr class="bg-black/[0.04]">
            <td class="px-4 py-4">
              Heating & Cooling Bundle </td>
            <td class="px-4 py-4">
              Natural Gas Heating System / AC / Standard Water Heater<sup>†</sup> </td>
            <td class="px-4 py-4 xl:text-2xl text-primary">
              <span class="line-through">$34.84</span>
              <strong>$30.66</strong>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <?php if (!empty($title)) { ?>
    <div class="text-[16px] xl:text-2xl text-black/60 font-semibold font-lead">
      <?php echo wpautop($content); ?>
    </div>
    <?php } ?>
  </div>
<?php } ?>